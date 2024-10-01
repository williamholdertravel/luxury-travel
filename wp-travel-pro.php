<?php
/**
 * Plugin Name: WP Travel Pro (Premium)
 * Plugin URI: http://wptravel.io/downloads/wp-travel-pro
 * Description: WP Travel Pro is a bundle which includes all our available addons for WP Travel.
 * Version: 8.6.0
 * Update URI: https://api.freemius.com
 * Author: WEN Solutions
 * Author URI: http://wptravel.io
 * Requires at least: 6.0.0
 * Requires PHP: 7.4
 * Tested up to: 6.5
 *
 * Text Domain: wp-travel-pro
 * Domain Path: /i18n/languages/
 *
 * @package wp-travel-pro
 * @category Core
 * @author WEN Solutions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WP_Travel_Pro' ) ) :
	/**
	 * Class WP_Travel_Pro.
	 */
	class WP_Travel_Pro {

		/**
		 * Plugin Name.
		 *
		 * @var string
		 */
		public $plugin_name = 'wp-travel-pro';

		/**
		 * Version.
		 *
		 * @var string
		 */
		public $version = '8.6.0';

		/**
		 * The single instance of the class.
		 *
		 * @var string $_instance
		 */
		protected static $_instance = null;

		/**
		 * Main WP_Travel_Pro Instance.
		 * Ensures only one instance of WP_Travel_Pro is loaded or can be loaded.
		 *
		 * @return WP_Travel_Pro - Main instance.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->define_constants();
			add_action( 'admin_notices', array( $this, 'check_dependency' ) );
			if ( function_exists( 'WP_Travel' ) ) {
				$this->init_hooks();
			}
		}

		/**
		 * Install WP Travel if it is not install and also activate it after install.
		 */
		public static function install_wp_travel() {
			$plugin_slug = 'wp-travel';
			$plugin      = $plugin_slug . '/wp-travel.php';
			$plugin_file = WP_PLUGIN_DIR . '/' . $plugin;

			$status = array(
				'install' => 'plugin',
				'slug'    => $plugin_slug,
			);
			if ( ! file_exists( $plugin_file ) ) {
				if ( ! current_user_can( 'install_plugins' ) ) {
					$status['errorMessage'] = __( 'Sorry, you are not allowed to install plugins on this site.', 'wp-travel-pro' );
					return $status;
				}

				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
				include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

				$api = plugins_api(
					'plugin_information',
					array(
						'slug'   => $plugin_slug,
						'fields' => array(
							'sections' => false,
						),
					)
				);

				if ( is_wp_error( $api ) ) {
					$status['errorMessage'] = $api->get_error_message();
					return ( $status );
				}

				$status['pluginName'] = $api->name;

				$skin     = new WP_Ajax_Upgrader_Skin();
				$upgrader = new Plugin_Upgrader( $skin );
				$result   = $upgrader->install( $api->download_link );

				if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
					$status['debug'] = $skin->get_upgrade_messages();
				}

				if ( is_wp_error( $result ) ) {
					$status['errorCode']    = $result->get_error_code();
					$status['errorMessage'] = $result->get_error_message();
					return ( $status );
				} elseif ( is_wp_error( $skin->result ) ) {
					$status['errorCode']    = $skin->result->get_error_code();
					$status['errorMessage'] = $skin->result->get_error_message();
					return ( $status );
				} elseif ( $skin->get_errors()->has_errors() ) {
					$status['errorMessage'] = $skin->get_error_messages();
					return ( $status );
				} elseif ( is_null( $result ) ) {
					global $wp_filesystem;

					$status['errorCode']    = 'unable_to_connect_to_filesystem';
					$status['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.', 'wp-travel-pro' );

					// Pass through the error from WP_Filesystem if one was raised.
					if ( $wp_filesystem instanceof WP_Filesystem_Base && is_wp_error( $wp_filesystem->errors ) && $wp_filesystem->errors->has_errors() ) {
						$status['errorMessage'] = esc_html( $wp_filesystem->errors->get_error_message() );
					}

					return ( $status );
				}

				$install_status = install_plugin_install_status( $api );
				$pagenow        = isset( $_POST['pagenow'] ) ? sanitize_key( $_POST['pagenow'] ) : ''; // @phpcs:ignore

				// If installation request is coming from import page, do not return network activation link.
				$plugins_url = ( 'import' === $pagenow ) ? admin_url( 'plugins.php' ) : network_admin_url( 'plugins.php' );

				if ( current_user_can( 'activate_plugin', $install_status['file'] ) && is_plugin_inactive( $install_status['file'] ) ) {
					$status['activateUrl'] = add_query_arg(
						array(
							'_wpnonce' => wp_create_nonce( 'activate-plugin_' . $install_status['file'] ),
							'action'   => 'activate',
							'plugin'   => $install_status['file'],
						),
						$plugins_url
					);
				}
				if ( is_multisite() && current_user_can( 'manage_network_plugins' ) && 'import' !== $pagenow ) {
					$status['activateUrl'] = add_query_arg( array( 'networkwide' => 1 ), $status['activateUrl'] );
				}
			}

			if ( file_exists( $plugin_file ) && ! is_plugin_active( $plugin_file ) ) {
				activate_plugin( $plugin_file );
			}
			return $status;

		}

		/**
		 * Plugin constants.
		 */
		private function define_constants() {
			$this->define( 'WP_TRAVEL_PRO_PLUGIN_FILE', __FILE__ );
			$this->define( 'WP_TRAVEL_PRO_ABSPATH', dirname( __FILE__ ) . '/' );
			$this->define( 'WP_TRAVEL_PRO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
			$this->define( 'WP_TRAVEL_PRO_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
			$this->define( 'WP_TRAVEL_PRO_VERSION', $this->version );
		}

		/**
		 * Define constants.
		 *
		 * @param string $name Constant name.
		 * @param string $value Constant value.
		 */
		public function define( $name, $value ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		/**
		 * Include  required function/ class files.
		 */
		private function includes() {
			include sprintf( '%s/inc/class-modules.php', WP_TRAVEL_PRO_ABSPATH );
			if ( file_exists( sprintf( '%s/license.php', WP_TRAVEL_PRO_ABSPATH ) ) ) {
				include sprintf( '%s/license.php', WP_TRAVEL_PRO_ABSPATH );
			}
		}

		/**
		 * Hooks to init in start.
		 */
		public function init_hooks() {
			$this->includes();
			add_action( 'init', array( $this, 'load_textdomain' ) );
			add_filter( 'wp_travel_premium_addons_list', array( $this, 'updater' ) );
			add_filter( 'wp_travel_show_upsell_message', array( $this, 'remove_upsell_message' ), 10, 2 );
		}

		/**
		 * Load localisation files.
		 */
		public function load_textdomain() {
			$locale = is_admin() && function_exists( 'get_user_locale' ) ? get_user_locale() : get_locale();
			$locale = apply_filters( 'plugin_locale', $locale, 'wp-travel-pro' );
			unload_textdomain( 'wp-travel-pro' );

			load_textdomain( 'wp-travel-pro', WP_LANG_DIR . '/wp-travel/wp-travel-pro-' . $locale . '.mo' );
			load_plugin_textdomain( 'wp-travel-pro', false, dirname( plugin_basename( __FILE__ ) ) . '/i18n/languages' );
		}

		/**
		 * This will uninstall this plugin if parent WP Travel plugin not found.
		 */
		public function check_dependency() {
			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}

			if ( ! function_exists( 'wp_travel' ) ) {
				echo '<div class="error wp-travel-admin-notice-error wp-travel-admin-notice">';
				echo wp_kses_post( '<p><strong>WP Travel Pro</strong> requires the <a href="https://wptravel.io/" target="__blank">WP Travel</a> plugin to work. Please activate it first.</p>' );
				echo '</div>';
			} else {
				if ( version_compare( WP_TRAVEL_VERSION, '6.0.0', '<' ) ) { 
					echo '<div class="error wp-travel-admin-notice-error wp-travel-admin-notice">';
					echo wp_kses_post( '<p>Current version of <strong>WP Travel Pro</strong> requires at least WP Travel Version 6.0.0. </p>' );
					echo '</div>';
				}
			}
		}
		/**
		 * Updater callback to hook core update.
		 *
		 * @param  array $addons Array of addons.
		 */
		public function updater( $addons ) {
			$addons[ $this->plugin_name ] = array(
				'version'        => WP_TRAVEL_PRO_VERSION,
				'item_name'      => 'WP Travel Pro',
				'author'         => 'WEN Solutions',
				'_option_prefix' => 'wp_travel_pro_license_',
				'_file_path'     => WP_TRAVEL_PRO_PLUGIN_FILE,
			);
			return $addons;
		}

		/**
		 * Remove upsell message from WP Travel.
		 */
		public function remove_upsell_message( $display, $types ) {
			if ( in_array( 'wp-travel-pro', $types ) ) {
				return false;
			}
			return $display;
		}
	}

	/**
	 * Initiate WP Travel Pro addon.
	 */
	function wp_travel_pro_init() {
		return WP_Travel_Pro::instance();
	}

	add_action( 'plugins_loaded', 'wp_travel_pro_init' );
	register_activation_hook( __FILE__, array( 'WP_Travel_Pro', 'install_wp_travel' ) ); // line one.
endif;
