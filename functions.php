<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Phu My Pharma' );
define( 'CHILD_THEME_URL', 'http://www.tohaitrieu.net/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* Enqueue Google Fonts
/*add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}*/

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Add support for WooCommerce
add_theme_support( 'genesis-connect-woocommerce');

//* Customize the credits
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Copyright &copy; ';
	echo date('Y');
	echo ' &middot; <a href="http://phumypharma.vn">Phú Mỹ Pharma</a> &middot; Thiết kế bởi <a href="http://tabin.website">Tabin JSC</a>';
	echo '</p></div>';
}
//* Remove 'You are here' from the front of breadcrumb trail
add_filter( 'genesis_breadcrumb_args', 'b3m_prefix_breadcrumb' );
function b3m_prefix_breadcrumb( $args ) {
 
  $args['labels']['prefix'] = '';
  return $args;
 
}
add_filter('widget_text', 'do_shortcode');
