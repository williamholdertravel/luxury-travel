=== WP Travel Pro ===
Contributors: Tags: travel, Travel booking, Tour Operator, travel agency, Tours, tour,  itinerary, tour itinerary, tour operator, tour itineraries, accommodation, accommodation listings, destinations, regions, tourism, locations, map, trip book, tabs, freemius
Donate link: http://wptravel.io/downloads/
Requires at least: 6.0.0
Tested up to: 6.5
Stable tag: 8.6.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WP Travel Pro is a bundle which includes all our available addons for WP Travel.

== Description ==
WP Travel Pro is a bundle which includes all our available addons for WP Travel.

* Check detail info at ["wptravel.io"](http://wptravel.io/downloads/wp-travel-pro) by WEN Solution.

= Plugin features: =

This bundle includes following addons below :

* WP Travel Utilities
* WP Travel Inventory Management
* WP Travel Tour Extra
* WP Travel Group Discount
* WP Travel Downloads
* WP Travel Custom Filters
* WP Travel Field Editor
* WP Travel Wishlist
* WP Travel Import Export
* WP Travel Currency Exchange
* WP Travel Heremap
* WP Travel Mailchimp
* WP Travel Advanced Gallery
* WP Travel Trip Weather forecast
* WP Travel Tour Guide

* WP Travel Partial Payment
* WP Travel Stripe Checkout
* WP Travel Paypal Express Checkout
* WP Travel Instamojo Checkout
* WP Travel Razorpay Checkout
* WP Travel Paystack Checkout
* WP Travel Khalti Checkout
* WP Travel Authorize.net Checkout
* WP Travel Payfast Checkout
* WP Travel PayU Latam Checkout

= Dedicated Support and Documentation =
We have an entire team of happiness engineers ready to help you. Ask your questions in the [support forum](http://wptravel.io/support-forum/forum/wp-travel-pro/).

Also you can checkout WP Travel tour-extras [documentation](http://wptravel.io/documentations/wp-travel-pro).

== Installation ==

= Uploading in WordPress Dashboard =
* Navigate to the 'Add New' in the plugins dashboard
* Navigate to the 'Upload' area
* Select wp-travel-pro.zip from your computer
* Click 'Install Now'
* Activate the plugin in the Plugin dashboard

= Using FTP =
* Download wp-travel-pro.zip
* Extract the wp-travel directory to your computer
* Upload the wp-travel directory to the /wp-content/plugins/ directory
* Activate the plugin in the Plugin dashboard

== Frequently Asked Questions ==
= There is something cool you could add... =

== Changelog ==

= 8.6.0 =
Release Date: 23rd September 2024

Fixes:
* Fixed issue with partial payment
* Optimize add to cart function 
* Fixed PHP Deprecated issues
* Fixed the Global FAQ not saving on first save 

Enhancements:
* Added translation support on translation missing text
* Explicitly declare the property in the class definition for missing property
* Added Elementor Template support for Guide Templates 

= 8.5.0 =
Release Date: 5th September 2024

Fixes:
* Fixed issue with multicurrency module
* Fixed the issue with Global Trip Tabs default values
* Fixed php deprecated warnings

= 8.4.0 =
Release Date: 21st August 2024

Fixes:
* Fixed the issue with "Open GDPR in new tab" setting 
* Optimized performance by filtering and rewriting duplicate queries

Enhancements:
* Included Trip Departure Time in booking emails.
* Added hook to change the Trip Departure Time label.
* Added trip departure time on thankyou page 
* Added support to include Trip Departure times and Trip Sale Percentage on trip cloning function
* Added support to allow multiple same trip to add in the cart in case of departure time is set 
* Added support to link download attachments of multiple trips on "{wp_travel_downloads_email_attachments}" email tag 
* Updated plugin update function code 

= 8.3.0 =
Release Date: 06th August 2024

Fixes:
* Fixed Trip Extras gallery issue

Enhancements:
* Added hook to change delay time for hiding "Trip added to cart" notice
* Added editor support for post type "tour-extras"
* Added header and footer support for Trip Extras template ( default template ) in case of FSE theme

= 8.2.0 =
Release Date: 22nd July 2024

Fixes:
* Fixed the issue with trip inventory ( onpage Booking )
* Fixed trip extras limit issue on checkout page in case of unlimited is set 
* Fixed partial payment of Razorpay Chekout module in case of only Razorypay is enable as payment gateway

Enhancements:
* Added note for Trip Extras Limit Quantity setting
* Added trip extras inventory support ( Onpage Booking )
* Added a substring function to show limit extras description 


= 8.1.0 =
Release Date: 09th July 2024

Fixes:
* Fixed mail function issue
* Fixed localization issue of Razorpay Checkout module
* Fixed partial payment issue of Razorpay Checkout module

Enhancements:
* Added a hook to block booking on a date if a trip is booked for that date
* Added a hook to block all trip bookings if a trip is booked for that date
* Added translation support for the text "Pay with stripe" and "Proceed payment"

= 8.0.0 =
Release Date: 24th June 2024

Fixes:
* Fixed parsley package issue of stripe
* Optimize code - onpage stripe booking

Enhancements:
* Modify hover effect of trip gallery image
* Generate new pot file

= 7.9.0 =
Release Date: 10th June 2024

Fixes:
* Fixed null value issue with mPDF package 
* Fixed issue with authorize.net payment module

Enhancements:
* Added new feature quick trip view

= 7.8.0 =
Release Date: 28th May 2024

Fixes:
* Fixed instamojo payment module issue 
* Fixed authorized.net payment module issue  
* Fixed the issue with gallery slider next/prev arrow 

Enhancements:
* Added support to show full country name in invoice
* Update the gallery masonry layout 

= 7.7.0 =
Release Date: 13th May 2024

Fixes:
* Fixed localization issue of Razorpay checkout module
* Fixed Trip Extras sale price issue on checkout page

Enhancements:
* Added option to set Trip Extras limit

= 7.6.0 =
Release Date: 29th April 2024

Fixes:
* Fixed partial payment issue
* Made the date format same on all booking emails
* Fixed comment template replaced by review template on ( page/post ) template
* Fixed issue with weather forecast shortcode

Enhancements:
* Implement new UI for stripe payment gateway

= 7.5.0 =
Release Date: 05th April 2024

Fixes:
* Fixed review form issue on the single guide template
* Fixed plugin security errors
* Fixed plugin performance errors
* Fixed reCAPTCHA issue 

Enhancements:
* Added editor support for guide templates
* Increased limit of partial payment up to 10
* Added hook to exclude zip form stripe card payment

= 7.4.0 =
Release Date: 25th March 2024

Fixes:
* Fixed plugin general issues 
* Fixed issue on version_compare() function 
* Optimized modules setting code 
* Replaced the text domain of all individual modules with 'wp-travel-pro'
* Clear all unwanted consoles 
* Added condition to show stripe card input field only when stripe payment is selected as payment gateway

Enhancements:
* Added shortcode for cart - [wptravel_cart_icon]
* Added hook to change the content of download itinerary email 
* Added hook to change the subject of download itinerary email 

= 7.3.0 =
Release Date: 11th March 2024

Fixes:
* Fixed missing text translation issue 

Enhancements:
* Added option to enable global tabs on all trips
* Added hook to change email subject of payment status
* Added hook to change email subject of booking status
* Added a hook to set offset for booking
* Added FSE header and footer support for guide templates 
* Added option to set a date for booking start

= 7.2.0 =
Release Date: 22nd February 2024

Fixes:
* Fixed issue of select field of field editor
* Fixed double invoice sending issue to customer
* Fixed deprecated return type of Recursive Array Access
* Fixed undefined array key access

Enhancements:
* Added compatibility of specific traveller's filed to works for multiple traveller
* Added hook to change the departure date label and arrival date lable for Thankyou page
* Added support to show full billing country name on booking invoice
* Added support for WooCommerce Checkout

= 7.1.0 =
Release Date: 7th February 2024

Fixes:
* Optimized code

Enhancements:
* Added shortcode for multiple currency selector
* Localized modules setting strings for translation support 

= 7.0.0 =
Release Date: 22nd January 2024

Fixes:
* Fixed undefined array index issue
* Fixed authorized.net pay button hide issue – OnPage booking
* Fixed payments PHP warnings
* Fixed custom field editor issue for input type number
* Fixed multiple times stripe.js loading  issue 

Enhancements:
* Added a feature to add global partial payment in amount
* Added payment details popup module for partial payment

= 6.9.1 =
Release Date: 10th January 2024

Fixes:
* Fixed the null array count issue 

= 6.9.0 =
Release Date: 8th January 2024

Fixes:
* Optimized code
* Fixed authorized.net payment issue. 
* Fixed Travel Guide entry form design issue.
* Fixed Paystack payment issue.
* Fixed coupon field layout issue.

Enhancements:
* Added subscription checkbox in case of On-page booking.
* Disabled select booking option in On-Page booking when only one option is selected 
in the backend


= 6.8.1 =
Release Date: 22th December 2023

Fixes:
* Security patch update. Added nonce to all ajax request.

= 6.8.0 =
Release Date: 20th December 2023

Fixes:
* Fixed departure date and arrival date format on the Thankyou page.
* Fixed trip extras unit label not working on the frontend.
* Fixed partial payment issue for more than 2 installments.

Enhancements:
* Added Contact Number, Contact Email, Country Code, and Tour Date column in bookings CSV.
* Added option to enable traveler info field for the specific trip.

= 6.7.0 =
Release Date: 4th December 2023

Fixes:
* Optimized stripe payment scripts
* Fixed query selector issue in stripe js 
* Optimized wishlists scripts
* Fixed minor CSS issue in the travel guide module
* Fixed undefined index issue in the utilities core module 
* Fixed payment conflict issue on Onpage booking 
* Fixed booking modal closing issue when authorized payment is enabled
* Fixed multi-currency exchange issue
* Fixed get travel guide query issue
* Fixed download core admin style not loading issue

= 6.6.1 =
Release Date: 11th November 2023

Fixes:
* Fixed stripe payment issue

= 6.6.0 =
Release Date: 6th November 2023

Fixes:
* Fixed form tag not supported under Custom booking form
* Removed unselected pricing category from the invoice.
* Fixed Advanced gallery slider issue.
* Excluded the Weather forecast shortcode from the itinerary download.
* Fixed pricing is included in the itinerary download even after disabling Trip pricing in PDF.
* Fixed translation issue for "Add to Cart".
* Fixed the dropdown tag not working while adding a custom field through the field editor.

Enhancements:
* Added the total price of the pricing category on the Thankyou page.
* Added discount coupon code and discount amount on the Thankyou page.
* Compatibility for PayU Latam payment for On-Page booking.
* Compatibility for Razorpay payment for On-Page booking.
* Added the new layout for the Custom filter archive page.
* Added a new option to enable a 24-hour time format.

= 6.5.0 =
Release Date: 12th October 2023

Fixes:
* Fixed Stripe ideal payment issue in case of On-page booking.
* Fixed country tag not working while adding custom field through the field editor.
* Fixed the check box tag not working while adding a custom field through the field editor.
* Fixed trip extras sale price issue on update cart 

Enhancement
* Added slider option in Advanced gallery. 
* Compatibility for PayU payment for On-Page booking.
* Added compatibility for Here map new APP key.
* Added hook for thankyou page message in case of no active orders [wp_travel_thankyou_page_empty_message] 
* Added show arrow and show dots options on advance gallery slider

= 6.4.0 =
Release Date: 27th September 2023

Fixes:
* Fixed Stripe iDEAL Checkout payment issues in case of On-Page booking.
* Fixed PayPal Express Checkout payment issues in case of On-Page booking.
* Fixed Stripe Checkout payment issue in case of newly generated key.
* Fixed Conditional Payment issue On-Page booking.

Enhancements:
* Added unit level for Trip Extras option.
* Added "Enable Pax Individually" option that allows Pax controls on individual pricing.

= 6.3.0. =
Release Date: 09 September 2023

Fixes:
* Fixed N/A issue under Fixed departure date when the start date is expired in case of recurring date.
* Fixed tour extras gallery issue.
* Removed conflicting CSS for downloads core.
* Removed conflicting CSS for travel guide core.
* Fixed departure date issue of thankyou page.

Enhancement:
* Added date contition for thankyou page for different bookings condition.
* Added option to edit trip extras in case of On-Page booking.

= 6.2.1. =
Release Date: 24 August 2023

Fixes:
* Fixed undefined index issue "show_wp_travel_conditional_payment".

= 6.2.0. =
Release Date: 23 August 2023

Fixes:
* Fixed Payment detail not showing on the thank you page while selecting 'Booking Only' in case of On-Page booking.
* Fixed Translation issues in case of multiple checkout (Add to cart).
* Fixed style issue in travel guide core.

Enhancement:
* Added Conditional Payment module.

= 6.1.0. =
Release Date: 7th August 2023
 
Enhancements:
* Compatibility for Stripe iDeal payment for On-Page booking.
* Compatibility for PayPal Express Checkout for On-Page booking.
* Enhanced multiple checkout option with the addition of Add to cart feature.

= 6.0.0. =
Release Date: 17th July 2023

Enhancement:
* Compatibility for Stripe Checkout and Authorize.net Checkout for On-Page booking.

= 5.9.0. =
Release Date: 27th June 2023

Fixes:
* Fixed translation issue for invoice in Chinese language.

Enhancement:
* Added string of invoices in `[wp_travel_string]` hook for updating and modifying invoice pdf text.
* Added compatibility for WP Travel SliceWP Affiliate Addon.
* Added compatibility with Gkash addon.

= 5.8.0. =
Release Date: 12th June 2023
 
Fixes:
* Fixed the time email tag {booking_selected_time} not working.
 
Enhancements:
* Added option to remove the image in a trip itinerary.

= 5.7.0. =
Release Date: 15th May 2023
 
Fixes:
* Fixed Itinerary downloads are also being attached when sending emails to share download files only to others using Want to send trip information to others? option in case of itinerary download is disabled.
* Fixed download file added once cannot be removed.
* Fixed automatic email sent while enabling and disabling the Itinerary download option.
 
Enhancements:
* Translation issue with the credit card placeholder in stripe Checkout.
* Added all the field available in booking form in Zapier.

= 5.6.0. =
Release Date: 27th April 2023

Fixes:
* Fixed issue while sharing files through email under the downloads tab on the single trip page.
* Fixed Itinerary download issue while downloading it on mobile.

Enhancement: 
* Added option to send itinerary PDF attached with booking email.
* Added validation option in Trip Duration to limit trip period.
* Added option to add different duration of trips (Like: 4 Days 8 Hours, 10 Hours 30 Minutes, 5 Days, 1 Night).

= 5.5.0. =
Release Date: 12th April 2023

Fixes:
* Fixed calendar layout issue in backend trip edit dashboard.
* Fixed when changing Payment Status to paid, Payment Mode status will also be changed to full.
* Fixed inventory not checking available pax in checkout page.  

Enhancement: 
* Added hook `[wp_travel_email_itinerary_pdf_attachment]` to attach itinerary PDF in the booking email.

= 5.4.1. =
Release Date: 3rd April 2023

Fixes:
* Fixed js issue in the gallery backend.
* Fixed thank you page not set while activate WPML plugin.
* Fixed custom filter label not translate while translating using WPML.

others: 
* Sets the WordPress tested up to version to 6.2.

= 5.4.0. =
Release Date: 30th March 2023

Fixes:
* Fixes the issue of getting duplicate emails while sending itinerary downloads through the option under the Downloads tab.

Enhancements:
* Added color layout option for PDF Downloads.
* Added Progressive Web App option to create a web app for the website.
* Implemented new design and interface of the Settings page.

= 5.3.0. =
Release Date: 1st March 2023

Fixes:
* Fixed heading tag not working while adding custom field through the field editor.
* Fixed FAQ shortcode not working in case of global FAQ.
* Fixed last date not selectable while enabling the recurring feature.
* Fixed displaying a small box instead of typing cursor under the PayPal express checkout option in the admin dashboard.
* Fixed payment issue while selecting the VISA option while payment through Paypal express checkout.
* Fixed PayPal express button not displaying on the checkout page while choosing a black color in the backend.
* Fixed multiple traveler custom field information not sent in email while using email tag.
* Fixed empty traveler field in incase of multiple checkout while multiple travelers is disable.

Style Fixes:
* Fixed layout issue in itinerary download PDF.

Tweaks:
* Renamed 'Tour Guide' as 'Travel Guide'.

= 5.2.0. =
Release Date: 13th February 2023

Fixes: 
* Fixed issue while clicking on the edit button in gender field in Field Editor section.
* Fixed show traveler information same on booking dashboard while booking multiple trip using multicart feature.
* Fixed translation of payment detail in thank you page.
* Fixed issue while uploading image in Trip Extras.
* Fixed Pax issue on Thank You page while editing PAX through checkout page.

Enhancements:
* Added option disable field from the checkout page in case of multiple travelers.
* Data of new field added through field editor will also be displayed in backend too.

= 5.1.0. =
Release Date:  13th January 2023

Fixes: 
* Tour Guide name visibility in Coupon code user option.
* Removed Coupon code section from mini-cart when there is no Coupon added.
* Fixed Trip Pax being replaced by Trip WP-Travel-Pro in Invoice pdf.
* Fixed Time option being visible even after disabling time.

= 5.0.0 =
Release Date:  4th January 2023

Enhancements:
* Added Tour Guide feature to assign a tour guide to the trip. This feature is only available in WP Travel Pro.
* Display the Booking Option, Payment Method, and Payment Status on Thank you page.
* Added option to show the high price of the trip on Frontend.

Fixes:
* Fixed Advanced Gallery issue while importing trips.
* Fixed Trip Extras not displaying in Invoice PDF while using the Multiple checkout feature.
* Fixed critical error displayed on the website while enabling Use Relative Path in PHP 8. 

= 4.3.2 =
Release Date: 15th December 2022

Fixes:
* Fixed Stripe Checkout issue with PHP 8.
* Fixed Inventory issue with PHP 8.
* Fixed Trip Extras issue with PHP 8.
* Fixed PayU Checkout issue with PHP 8.
* Fixed Feature image being replace by WP Travel default image while using Import/Export feature.
* Fixed custom text being displayed instead of Pricing Categories in Invoice PDF.

= 4.3.1 =
Release Date: 16 November 2022

Fixes:
* Fixed Feature image not deleted when deleting the image from the backend.
* Fixed Sale Price being displayed in the Itinerary Download even after disabling Sale Price.
* Fixed Multiple Currency Shortcodes not working while selecting a few currencies.

= 4.3.0 =
Release Date: 1st September 2022

Fixes:
* Fixed Payment Status Issue in Stripe iDEAL Checkout.
* Fixed Inventory not working for Multicart feature. 

= 4.2.9 =
Release Date: 9th August 2022

Fixes:
* Fixed checkout page showing payment option even `booking only` is selected for the checkout page settings.
* Fixed the itinerary download price not being changed as per currency changes.

= 4.2.8 =
Release Date: 28th July 2022

Enhancement:
* String translation support added in Invoice and Itinerary downloads. 

Fixes:
* Fixed jquery conflict with dropzone in import export module.
* Fixed Download modules warning with tmp path issue.
* Fixed Download module showing error if there is no thumbnail image in download.

Style Fixes:
* Fixed wishlists icon display error in archive and related trips pages.

= 4.2.7 =
Release Date: 21st July, 2022 

Fixes:
* Fixed archive page and single trip page wishlist icon CSS added.

= 4.2.6 =
Release Date: 12th July, 2022 

Fixes:
* Fixed showing only one dropdown option in booking option in checkout page. Now if there is only one booking option, then this field is hidden by default.
* Fixed Advanced Gallery undefined index issue.

= 4.2.5 =
Release Date: 28th June, 2022 

Fixes:
* Removed discount and tax field in invoice if there is no tax and discount.

= 4.2.4 =
Release Date: 21st June, 2022 

Fixes:
* Fixed gallery masonry layout issue with thumbnail image size. All masonry gallery images are in same size due to thumbnail size.
* Fully removed addons settings options.

= 4.2.3 =
Release Date: 13th June, 2022 

Tweaks:
* Freemius SDK version updated to 2.4.3.

Fixes:
* Fixed Multiple Currency warning in case of apilayer fixer api limit exceed.
* Fixed PHP notice in trip edit page if Global faqs is empty under WP Travel settings.
* Fixed Advanced Gallery masonry layout issue due to same image size.

= 4.2.2 =
Release Date: 25th May, 2022

Enhancement:
* Redirected Book Now button directly to added custom link.
* Added Enable/Disable all module options under settings as per module category.

Fixes:
* Fixed Itinerary Download layout issue under itinerary section (When adding more number of itineraries, text will be smaller in the PDF).
* Fixed Advanced gallery page unresponsive issue in case of the number of slides 0.
* Fixed `form` tag not supported under Custom booking form.
* Added support to API layer with Fixer API.
* Fixed Currency exchange widget displaying all currency in case of premium API.
* Fixed Wishlist icon not displaying in list view of widget.

= 4.2.1 =
Release Date: 27th April, 2022

Tweaks:
* Renamed `Addons settings` to `Modules settings` and added all modules enable/disable options.
* Changed geo-location API to resolved currency display as per host IP instead of users IP.

Fixes:
* Fixed Inventory not working for booking only trips in case of all payment addons disabled.
* Fixed Trip extras not being displayed in calendar view.
* Fixed Multiple currency, display price as per geolocation conflict with wp rocket cache.

= 4.2.0 =
Release Date: 29th March, 2022

Enhancement:
* Resolved site load speed issue with multiple currency. Reduced server response time by improving in TTFB speed.
* Added multiple currency support for group discount price on single trip page and trip extras price on extras page.

Fixes:
* Fixed Undefined index: state_pol in PayU Latam Checkout.
* Fixed Razorpay checkout issues with the fractional amount. It was displaying like invalid amount if there is a fractional amount.
* Fixed Square checkout live key settings fields not displaying issue.
* Fixed Google Calendar displaying multiple settings fields in the admin.
* Fixed trip extras amount not converted in the invoice.
* Fixed Advanced Gallery Masonry layout issue in gallery tab.
* Fixed invoice enable/disable issue.
* Fixed Multiple currency changes issue with base currency change.

= 4.1.0 =
Release Date: 9th February, 2022

Fixes:
* Fixed Multiple currency warning notices if the API key is empty.
* Fixed Open/Close all Faq multiple buttons if shortcode is used to render faq.
* Advanced Gallery empty issue while enabling advanced gallery for old trips having default gallery.
* Fixed alt attribute not working in an advanced gallery.
* Fixed displaying HTML entities in the overview section of PDF download.

Tweaks:
* Added Enable/Disable Trip extras option. 

= 4.0.4 =
Release Date: 27th December

Fixes:
* Fixed existing custom tab overridden issue when adding new custom tab.
* Fixed Multiple currency performance issue.
* Fixed Multiple currency price conversion not working issue.
* Fixed Google Calendar something went wrong error on settings misc options.
* Fixed Script dependency error on admin settings page.

Tweaks:
* Added Enable/Disable Google Calendar option. 

= 4.0.3 =
Release Date: 20th December, 2021

Fixes:
* Fixed error in Google Calendar while activating WP Travel Pro.
* Fixed Partial payment view info table data value and installment count.
* Fixed undefined function get_current_screen error from downloads module. 

Tweaks:
* Add support to check custom taxonomy pages in WP_Travel::is_pages and  WP_Travel::is_page. This will now filter WP Travel pages for custom taxonomy created from custom filters.
* Inventory option changed. Added option to deduct inventory for paid booking only.
* Modified Partial payment reminder notification process. Added option to send Partial payment reminder notification before certain days of the trip date.

= 4.0.2 =
Release Date: 15th November, 2021

Fixes:
* Fixed RazorPay Autofill on checkout popup.
* Fixed Import Export octet-stream issue fixes.
* Fixed Advanced gallery displaying in admin trip edit even it is disabled from settings.
* Fixed unable to make remaining partial payment through user dashboard.
* Fixed console error due to Field editor script not loading.

Tweaks:
* Made partial payment available for `booking only` trip as well.
* Hook added in the Thankyou page before and after content.

= 4.0.1 =
Release Date: 12th September, 2021

Fixes:
* Misc tab will get something went error if we enable it from the addons settings tab.
* Empty div removed from google calendar settings.
* Fixed showing delete post notice twice in the downloads section.
* Fixed itinerary downloads image does not display in case of use relative path off.
* Fixed pricing title not displaying in thank you page.

Tweaks:
* Enhanced trip edit blocks with hooks.  Fetched all tab content using wp hooks.

= 4.0.0 =
Release Date: 29 August, 2021

Fixes:
* Fixed: Heremap location lat, lng set on search.
* Fixed: Undefined index in thankyou page.

Enhancement:
* Added Square up Checkout payment gateway.
* Added Google Calendar to sync booking data in calendar.
* Added Itinerary downloader to download itinerary as pdf.
* Added Multicart feature.
* Added Group discount in pricing.

= 3.2.8 =
Release Date: 22nd June, 2021

Fixes:
* Fixed: Thankyou page shortcode issue with V3 trip.
* Fixed: Localization warning in admin settings page. Localization warning in Heremap and Multiple Currency due to passing string as value in wp_localize_script.
* Fixed: Field editor Icon not found error.
* Fixed: Currency exchange widget is not displaying select currency field.

= 3.2.7 =
Release Date: 17th May, 2021

Fixes:
* Stripe payment intent status updated as per update in new stripe api.
* Fixed Download link empty issue in download pdf.

= 3.2.6 =
Release Date: 3rd May, 2021

Enhancement:
* Thankyou page shortcode enhanced. Added pricing info, person info and extras info as well.

Fixes:
* Fixes Checkout page has PHP error for old trips.
* Fixed Gallery images can not be removed issue. Issue regarding need at least one gallery image in trip extras.
* Fixed Zero decimal currency amount mismatch in booking detail and invoice. If paid 200 Yen then it shows 2 Yen as paid amount.

= 3.2.5 =
Release Date: 19th April, 2021

Enhancement:
* Download booking as csv format added in Admin booking list page.
* Freemius sdk updated to version 2.4.2.
* Added html support for trip extras description.

Fixes:
* Enable/disable option added for downloads.
* Fixed Stripe checkout amount mismatch for zero decimal currencies.
* Fixed Multiple currency scripts are loaded even it is disabled.
* Fixed Authorize.net enable/disable not working.
* Fixed Partial payment issue regarding p.reduce.
* Fixed No active order found notice in admin in case of thankyou page shortcode uses.
* Fixed Trip enquiry additional fields data are not saved in admin trip enquiries.

= 3.2.4 =
Release Date: 3rd March, 2021

Fixes:
* Advanced gallery slider issue fixed.
* Added slider auto-play and number of slider selector in advanced gallery settings.

Enhancement:
* Here map search enhancement done.

= 3.2.3 =
Release Date: 1st March, 2021

Fixes:
* Fixed enable/disable Multiple currency form addons settings.
* Fixed enable/disable Utilities from addons settings.
* Fixed Empty options in PayU latam checkout fields.
* Fixed Slick slider issue in WP Travel 4.5.

= 3.2.2 =
Release Date: 25th February, 2021

Fixes:
* Partial payment and invoice error while making second payment.
* Here map compatibility fixes with WP Travel 4.4.7 and above.

= 3.2.1 =
Release Date: 24th February, 2021

Tweaks:
* All function name starts with 'wp_travel_' are deprecated.

= 3.2.0 =
Release Date: 5th February, 2021

Tweaks:
* Seats left displayed as per inventory.

= 3.1.9 =
Release Date: 28th January, 2021

Fixes:
* Inventory size updated if booking post deleted.
* Translation of booking options list strings fixes in the checkout page.
* Undefined index URL of undefined is fixed in case of Advanced Gallery image upload.
* Partial Payment issue fixes in Instamojo checkout. Made Full payment even in case of partial payment.
* Currency display type support added in Multiple currencies. Use either currency symbol or text.

= 3.1.8 =
Release Date: 7th January, 2021

Fixes:
* 'Illegal offset type' warning after booking a trip is fixed.
* Removed Unwanted logs in downloads.

= 3.1.7 =
Release Date: 30th December, 2020

Deprecated:
* Function `is_wp_travel_archive_page` is deprecated used `WP_Travel::is_page('archive');` instead of.
* Function `wp_travel_is_checkout_page` is deprecated used `WP_Travel::is_page('checkout');` instead of.
* Function `wp_travel_is_cart_page` is deprecated used `WP_Travel::is_page('cart');` instead of.
* Function `wp_travel_is_dashboard_page` is deprecated used `WP_Travel::is_page('dashboard');` instead of.
* Function `wp_travel_is_account_page` is deprecated used `WP_Travel::is_page('dashboard');` instead of.

Tweaks:
Updated parameter structure in `$wt_cart->add()` method. Instead of using multiple parameter, now param will be in one array. 

Fixes:
* Undefined index type in Field editor.
* Fixed, unable to edit placeholder of default travelers fields.
* Fixed, Undefined in Mailchimp.
* Fixed, unable to check/uncheck required checkbox of default travelers fields.
* Download attachment not working in email.

= 3.1.6 =
Release Date: 11th December, 2020

Enhancement:
* License term updated. License Moved to Freemius.

= 3.1.5 =
Release Date: 11th December, 2020

Fixes:
* Removed `Force Cart / Checkout` option due to no uses. 
* Removed `Skip Cart Page` option due to no uses.

Enhancement:
* License term updated. We have updated our premium license to Freemius from Themepalace.

= 3.1.4 =
Release Date: 11th November, 2020
* Added email field for sending attachment to others on single itinerary downloads tab.
* Fixes: Paying full payment even partial payment is made in Razorpay Checkout. 
* Fixes: Trip edit gallery section error if Advanced gallery disabled from addons settings.
* Fixes: Partial Payment status on Booking page fixes.
* Fixes: Partial payment range control not functioning properly while click and drag control.

= 3.1.3 =
Release Date: 3rd November, 2020
* Enhancement : WP Travel added email tag support for travelers info fields.
* Fixes: Issue related to the video thumbnail in gallery section is fixed.
* Compatibility tested with WP 5.5.3

= 3.1.2 =
Release Date: 22nd October, 2020
* Enhancements: Added for Cut off time which allows the user to define the time for disabling the booking process of the trip.
* Fixes: Some of the trip data not being exported/imported is now fixed.
* Fixes: Addon settings are not listing all addons options if Switch to v4 option is disabled.
* Fixes: Removed Pro notices in settings Tabs.

= 3.1.1 =
Release Date: 16th October, 2020
* Fixes : Settings Page error if Multiple currency is disabled.
* Fixes : Invoice data is not being displayed in the email tab and Invoice tab.

= 3.1.0 =
Release Date: 15th October, 2020
* Enhancement : Settings page updated to WordPress block layout.
* Enhancement : Addition of the option to choose either "Booking Only", "Booking with Payment" or option to choose both is provide in checkout page through Utilities.
* Fixes : Inventory value not updated even if trip inventory is enabled.
* Compatibility tested upto WordPress 5.5.1.

= 3.0.3 =
Release Date: 2nd September, 2020
* Session start issue shows in the health check plugin is fixed.
* All Downloads not being displayed in the download tab of the trip edit section.
* Fixed Gallery empty while updating Normal Gallery to Advanced Gallery.

= 3.0.2 =
Release Date: 8th July, 2020
* Optimization: Merged some of the scripts file for optimization purposes and loads single file instead of multiple.

= 3.0.1 =
Release Date: 25th June, 2020
* Optimization: Scripts and Styles loads when needed on WP Travel Pages.
* Adds support for WP Travel v4.0.0+.
* Adds time on new cart-mini on chekcout page.

= 3.0.0 =
Release Date: 10th June, 2020
* New: Added recurring dates feature.
* Enhancement: Downloads Email Attachement added.
* Enhancement: Trip edit layout updated to WordPress Block layout.
* Removed: List by fixed departure option.
* Removed: Single pricing option.
* Removed: Option Partial payment for extras.
* Removed: Unwanted inventory options like: Status message format, Group size, custom inentory option.
* Frontend layout updated.

= 2.1.3 =
Release Date: 27th May, 2020
* Fixes: Payment addons issue, displays as payment option on checkout when disabled.

= 2.1.2 =
Release Date: 26th March, 2020
* Utilities minor fixes.

= 2.1.1 =
Release Date: 12th March, 2020
* Enhancement: Library updates.

= 2.1.0 =
Release Date: 4th March, 2020

* Fixes: Fixes for the compatibility issue of group discount prices.
* Features: Added downloadable email attachments feature in WP Travel Downloads.

= 2.0.9 =
Release Date: 3rd March, 2020

* Added feature to set trip extras as free.

= 2.0.8 =
Release Date: 23rd January, 2020

* WP Travel Invoice Feature added.
* Minor CSS fixes.

= 2.0.7 =
Release Date: 31st December, 2019

* Compatibility Update: Instamojo, payfast and stripe compatibility update and minor fixes.
* Fixes: Partial Payment issue regarding the custom payout percent fixed, now uses global payout percent as default if custom parital payout is not updated or is not equal to 100%.

= 2.0.6 =
Release Date: 17th December, 2019

* Enhancement: Added geo-location feature in multiple currency.

= 2.0.5 =
Release Date: 16th December, 2019

* Enhancement: Trip Time added for the trips.
* Fixes: Wishlist text correction.
* Fixes: Some string translation fixes.
* Fixes: Field editor required for travelers info field enhancement.
* Fixes: Group discount conflict with Beaver page builder.

= 2.0.4 =
Release Date: 5th December, 2019

* Fixes: Partial Payment reminder enable issue fixed.
* Enhancement: Added option to make field required for all travellers in field editor.

= 2.0.3 =
Release Date: 3rd December, 2019

* Fixes: Group discount translation issue fixed.

= 2.0.2 =
Release Date: 26th November, 2019

* Fixes: Tour extras standard paypal checkout is now compatible with multiple currency conversion.

= 2.0.1 =
Release Date: 19th November, 2019

* Fixes: Minor issue fixes and compatibility check.

= 2.0.0 =
Release Date: 13th November, 2019

* Fixes: Minor issue fixes.

= 1.1.9 =
Release Date: 12th November, 2019

* Enhancement: Added support for multiple partial payment.
* Fixes: Minor issue fixes.

= 1.1.8 =
Release Date: 17th October, 2019

* Fixes: Advanced Gallery issue fixes.

= 1.1.7 =
Release Date: 12th October, 2019

* Fixes: Overiding gallery items.
* Fixes: Feature image not being set.
* Minor Bug Fixes.

= 1.1.6 =
Release Date: 02 October, 2019

* Fixed : Notice: Undefined index: enable_partial.
* Fixed : When extras is deleted in cart page, the same trip is added in cart page.

= 1.1.5 =
Release Date: 24 September, 2019

* Introduces the multiple currency feature which allows to check and purchase the trip packages in different currencies.
* Updated Partial Payment.
* Updated Instamojo Payment.

= 1.1.4 =
Release Date: 11 September, 2019

* Introduces the feature of multiple pricing checkout which allows the users to carry out the checkout process with multiple pricing ( e.g Adult , children and other ) through a single cart.
* Updated Group Discount pricing structure.
* Fixes Enable Disable option for RazorPay Checkout, Instamojo Checkout, Paypal Express Checkout.
* Fixes Broken links for Payment addons 'click here' link.

= 1.1.3 =
Release Date: 23 August, 2019

* Added WP Travel Stripe iDEAL Checkout

= 1.1.2 =
Release Date: 31st July 2019

* Compatibility Update.

= 1.1.1 =
Release Date: 8th July 2019

Enhancement:

* Added WP Travel Trip Weather forecast addons.
* Added New Payment Gateway PayU Latam checkout.

Fixes:

* Global FAQ's are not being removed from trip FAQ though it is removed from global FAQ.
* FAQ Questions and answers are mismatched if enable global then disable global FAQ from trip.
* Group Discount option is not being able to disable if list of options are empty.

= 1.1.0 =
Release Date: 28th June, 2019

Enhancement:

* Stripe Library updated to [Stripe PHP](https://github.com/stripe/stripe-php).
* Added SCA (Strong Customer Authentication) supports for stripe checkout.

Fixes:

* FAQs are not being correctly saved on admin trips page.
* Email Shortcode tags not working if no downloads files.

= 1.0.9 =
Release Date: 19th June, 2019

Enhancement:

* WP Travel Advanced Gallery added.
* Global and Trip Faq both can be displayed in the Faq section.
* In a download, added a feature to show the total number of downloads post at the trip backend.
* Feature to include specific downloads in emails using email tags.

Fixes:

* Fatal error with older version of WP Travel. It throws undefined function, PHP error notice if Older WP Travel.
* Here map data is not being saved.

= 1.0.8 =
Release Date: 9th June, 2019

Enhancement:

* Deprecated Hooks updated in WP Travel Utilities, Wishlists, Field Editor and Tour Extras.
* WPML Support for partial payment email template.

Fixes:

* PayU and PayHere checkout issue with last release.
* WP Travel Field Editor issue with Date of birth field.
* WP Travel Field Editor field data not saved on enquiry form.
* WP Travel Downloads issue with fontawesome in console.

= 1.0.7 =
Release Date: 3rd June, 2019

Enhancement:

* Settings string is now compatible with WPML String translation.
* Added option to made partial payment for trip extra items price.
* Group discount price display with proper formatting.
* Group discount PHP warning on frontend when group discount not added.
* Currency Exchange load time enhancement and shortcode attrubute changed from selected_currencies to currency_code.
* Partial payment supported by Authorize.net checkout.

Fixes:
* Inventory issue with fixed departure listing fixes.
* Inventory Booking Availability not updating while deleting a booking.
* Mailchimp Settings text stripslashes issue.
* Authorize.net payment issue with WP Travel 2.0.0
* Authorize.net Library changed to Anet SDK.
* Authorize.net CORS Policy Issue fixes.
* Redirection issue fixed on PayHere and Payfast.

= 1.0.6 =
Release Date: 27th May, 2019

Enhancement:

* New Payment addon added - WP Travel PayU Checkout.
* New Payment addon added - WP Travel Payhere Checkout.
* Filter added to sort admin booking menu like custom filters, settings etc.
* Filter added in trip extra price.

= 1.0.5 =
Release Date: 23rd May, 2019

Enhancement:

* WPML compatibility added for settings strings.

Fixes:
* Group discount issue fixes.

= 1.0.4 =
Release Date: 14th May, 2019

Enhancement:

* New Payment addon, WP Travel Payfast Checkout is added.
* New Hook added in partial payment.

Fixes:
* Console error fixes in field editor.

= 1.0.3 =
Release Date: 13th May, 2019

Enhancement:
* Added payment addons sorting as per WP Travel 2.0.
* Added payment addons settings accordion layout as per WP Travel 2.0.

Fixes:
* Minor issue fixes in utilities and payment addons.
* Hide Upsell Message issue fixes.


= 1.0.2 =
Release Date: 30th April, 2019

Enhancement:

* Added addons enable disable features.
* Support for payment addons sorting.
* Support for Payment addons settings accordion layout.

Fixes:
* Minor issue fixes.


= 1.0.1 =
Release Date: 22nd April 2019

Fixes:

* Strpe Payment gateway conflict with other stripe payment gateways.
* All Payment script is only loaded when enabled.
* Minor issue with wishlist.

= 1.0.0 =
* Initial  release.
