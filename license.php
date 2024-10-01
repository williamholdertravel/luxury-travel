<?php

add_action( 'admin_menu', 'wp_travel_pro_add_license_menu' );
function wp_travel_pro_add_license_menu() {
    add_submenu_page(
        'edit.php?post_type=itinerary-booking',
        __( 'License', 'wp-travel-pro' ),
        __( 'License', 'wp-travel-pro' ),
        'manage_options',
        'wp-travel-pro-license',
        function () {
            echo "<a href='" . esc_url( admin_url( 'edit.php?post_type=itinerary-booking&page=wp-travel-pro-license' ) ) . "-account'>Manage License</a>";
        }
    );
}

if ( !function_exists( 'wp_travel_pro_fs' ) ) {
    function wp_travel_pro_fs() {
        global $wp_travel_pro_fs;
        if ( !isset( $wp_travel_pro_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wp_travel_pro_fs = fs_dynamic_init( array(
                'id'              => '6790',
                'slug'            => 'wp-travel-pro',
                'premium_slug'    => 'wp-travel-pro',
                'type'            => 'plugin',
                'public_key'      => 'pk_5239dff7330a2137184187faf9c26',
                'is_premium'      => true,
                'is_premium_only' => true,
                'has_addons'      => apply_filters( 'wp_travel_has_addon', false ),
                'has_paid_plans'  => true,
                'menu'            => array(
                    'slug'       => 'wp-travel-pro-license',
                    'first-path' => 'edit.php?post_type=itinerary-booking&page=settings#wp-travel-tab-content-license',
                    'contact'    => false,
                    'addons'     => apply_filters( 'wp_travel_has_addon', false ),
                    'support'    => false,
                    'parent'     => array(
                        'slug' => 'edit.php?post_type=itinerary-booking',
                    ),
                ),
                'is_live'         => true,
            ) );
        }
        return $wp_travel_pro_fs;
    }

    // Init Freemius.
    wp_travel_pro_fs();
    // Signal that SDK was initiated.
    do_action( 'wp_travel_pro_fs_loaded' );
}
function wptravel_pro_check_for_license() {
    $license_details = array();
    if ( wp_travel_pro_fs()->_get_license() ) {
        if ( isset( wp_travel_pro_fs()->_get_license()->expiration ) ) {
            $expire_date = new DateTime(wp_travel_pro_fs()->_get_license()->expiration);
            $license_details['license_expiry_date'] = $expire_date->format( 'Y M d' );
            $license_details['license_status'] = ( new DateTime() < $expire_date ? 'Active' : 'Expired' );
        } else {
            $license_details['license_expiry_date'] = '';
            $license_details['license_status'] = 'Life Time';
        }
        $user_id = wp_travel_pro_fs()->_get_license()->user_id;
        $license_details['site_url'] = get_site_url();
        $license_details['user_fullname'] = wp_travel_pro_fs()->get_user()->first . ' ' . wp_travel_pro_fs()->get_user()->last;
        $license_details['user_email'] = wp_travel_pro_fs()->get_user()->email;
        $license_details['site_email'] = get_option( 'admin_email' );
        $license_details['license'] = wp_travel_pro_fs()->_get_license()->secret_key;
        $license_details['wptravel_version'] = get_plugins()["wp-travel/wp-travel.php"]['Version'];
        $license_details['wptravel_pro_version'] = get_plugins()["wp-travel-pro/wp-travel-pro.php"]['Version'];
        $license_details['plugin_update_date'] = date( 'Y-m-d', current_time( 'timestamp', 1 ) );
    } else {
        $license_details['site_url'] = get_site_url();
        $license_details['user_fullname'] = '';
        $license_details['user_email'] = '';
        $license_details['site_email'] = get_option( 'admin_email' );
        $license_details['license'] = '';
        $license_details['wptravel_version'] = get_plugins()["wp-travel/wp-travel.php"]['Version'];
        $license_details['wptravel_pro_version'] = get_plugins()["wp-travel-pro/wp-travel-pro.php"]['Version'];
        $license_details['license_expiry_date'] = '';
        $license_details['license_status'] = '';
        $license_details['plugin_update_date'] = date( 'Y-m-d', current_time( 'timestamp', 1 ) );
    }
    $license_data = $license_details;
    // Set up the request body
    $body = array(
        'site_url'             => $license_data['site_url'],
        'user_fullname'        => $license_data['user_fullname'],
        'user_email'           => $license_data['user_email'],
        'site_email'           => $license_data['site_email'],
        'license'              => $license_data['license'],
        'license_status'       => $license_data['license_status'],
        'wptravel_version'     => $license_data['wptravel_version'],
        'wptravel_pro_version' => $license_data['wptravel_pro_version'],
        'license_expiry_date'  => $license_data['license_expiry_date'],
        'plugin_update_date'   => $license_data['plugin_update_date'],
    );
    // Set up the request options
    $options = array(
        'body' => $body,
    );
    $response = wp_remote_post( 'https://subscription.wensolutions.com/wp-json/wptravelUserDetais/v1/get-license-details', $options );
}

add_action( 'wptravel_check_license_action', 'wptravel_pro_check_for_license' );
function wptravel_register_corn_schedule_for_license_check() {
    if ( !wp_next_scheduled( 'wptravel_check_license_action' ) ) {
        wp_schedule_event( time(), 'daily', 'wptravel_check_license_action' );
    }
}

if ( apply_filters( 'wptravel_disable_license_check_action', false ) !== true ) {
    add_action( 'wp', 'wptravel_register_corn_schedule_for_license_check' );
}
add_action( 'init', function () {
    // Get all cron events
    $cron_events = _get_cron_array();
    // Loop through all cron events
    foreach ( $cron_events as $timestamp => $cron ) {
        // Check if our target event exists
        if ( isset( $cron['wptravel_pro_check_for_license_cron_job'] ) ) {
            // Remove the cron event
            unset($cron_events[$timestamp]['wptravel_pro_check_for_license_cron_job']);
        }
    }
    // Update the cron array
    _set_cron_array( $cron_events );
} );