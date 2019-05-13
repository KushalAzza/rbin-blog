<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/style.css' , array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', 'https://cdn.jsdelivr.net/gh/KushalAzza/rbin-blog/child-style.css' , array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', 20 );

function remove_default_stylesheet() {
    wp_dequeue_style( 'blogrow-font-awesome' );
    wp_deregister_style( 'blogrow-font-awesome' );
	wp_dequeue_style( 'blogrow-responsive' );
    wp_deregister_style( 'blogrow-responsive' );
	wp_dequeue_style( 'widgetopts-styles' );
    wp_deregister_style( 'widgetopts-styles' );
	wp_dequeue_style( 'wp-pagenavi' );
    wp_deregister_style( 'wp-pagenavi' );
	wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );
//	wp_dequeue_style( 'chld_thm_cfg_separate' );
//  wp_deregister_style( 'chld_thm_cfg_separate' );
//	wp_dequeue_style( 'blogrow-style' );
//  wp_deregister_style( 'blogrow-style' );

	if ( !is_page('contact') ) {
        wp_dequeue_style( 'contact-form-7' );
        wp_deregister_style( 'contact-form-7' );
    }	
    if ( !is_single() ) {
        wp_dequeue_style( 'ez-icomoon' );
        wp_deregister_style( 'ez-icomoon' );
        wp_dequeue_style( 'ez-toc' );
        wp_deregister_style( 'ez-toc' );
    }
    wp_register_style( 'widgetoptions-css', 'https://cdn.jsdelivr.net/wp/plugins/widget-options/trunk/assets/css/widget-options.css' ); 
    wp_enqueue_style( 'widgetoptions-css' );
	wp_register_style( 'rbin-res-css', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/responsive.css' ); 
	wp_enqueue_style( 'rbin-res-css' );
    wp_register_style( 'Font_Awesome', 'https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css' ); 
    wp_enqueue_style( 'Font_Awesome' );
}
	
add_action( 'wp_enqueue_scripts', 'remove_default_script', 100 );
function remove_default_script() {
    wp_dequeue_script( 'blogrow-flexslider' );
    wp_deregister_script( 'blogrow-flexslider' );
	wp_dequeue_script( 'blogrow-fitvids' );
    wp_deregister_script( 'blogrow-fitvids' );
	wp_dequeue_script( 'blogrow-owl-carousel' );
    wp_deregister_script( 'blogrow-owl-carousel' );
	wp_dequeue_script( 'blogrow-scripts' );
    wp_deregister_script( 'blogrow-scripts' );
	wp_dequeue_script( 'mc4wp-form-themes' );
    wp_deregister_script( 'mc4wp-form-themes' );
	if ( !is_page('contact') ) {
        wp_dequeue_script( 'contact-form-7' );
        wp_deregister_script( 'contact-form-7' );
    }

	if ( !is_single() ) {
        wp_dequeue_script( 'jquery-smooth-scroll' );
        wp_deregister_script( 'jquery-smooth-scroll' );
        wp_dequeue_script( 'js-cookie' );
        wp_deregister_script( 'js-cookie' );
        wp_dequeue_script( 'jquery-sticky-kit' );
        wp_deregister_script( 'jquery-sticky-kit' );
        wp_dequeue_script( 'jquery-waypoints' );
        wp_deregister_script( 'jquery-waypoints' );
        wp_dequeue_script( 'ez-toc-js' );
        wp_deregister_script( 'ez-toc-js' );
    }

    wp_register_script( 'jquery-flexslider', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/js/jquery.flexslider.min.js' ); 
    wp_enqueue_script( 'jquery-flexslider' );
	wp_register_script( 'jquery-fitvids', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/js/jquery.fitvids.js' ); 
    wp_enqueue_script( 'jquery-fitvids' );
	wp_register_script( 'jquery-owl-carousel', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/js/owl.carousel.min.js' ); 
    wp_enqueue_script( 'jquery-owl-carousel' );
	wp_register_script( 'alx-script', 'https://cdn.jsdelivr.net/gh/AlxMedia/blogrow/js/scripts.js' ); 
    wp_enqueue_script( 'alx-script' );
}

// END ENQUEUE PARENT ACTION

/*  Code Shortcode
/* ------------------------------------ */
function rbin_code_shortcode($atts,$content=NULL) {
		$output = '<span class="code">'.strip_tags($content).'</span>';
		return $output;
	}
add_shortcode('code','rbin_code_shortcode');

function rbin_featsnip_shortcode($atts,$content=NULL) {
		$output = '<div class="entry-speakable">'. $content .'</div>';
		return $output;
	}
add_shortcode('featsnip','rbin_featsnip_shortcode');

function kushal_social_link_shortcode() {
    return '<p style="text-align: center;"><a href="//www.linkedin.com/in/KushalAzza"><i class="fa fa-3x fa-linkedin-square" aria-hidden="true"></i></a>  <a href="//facebook.com/KushalAzza"><i class="fa fa-3x fa-facebook-square" aria-hidden="true"></i></a>  <a href="//twitter.com/KushalAzza"><i class="fa fa-3x fa-twitter-square" aria-hidden="true"></i></a>  <a href="//instagram.com/KushalAzza"><i class="fa-3x fa-instagram fa" aria-hidden="true"></i></a>  <a href="//plus.google.com/+KushalAzza"><i class="fa fa-3x fa-google-plus-square" aria-hidden="true"></i></a></p>';
}
add_shortcode('KushalSocial', 'kushal_social_link_shortcode');

function restorebin_social_link_shortcode() {
    return '<p style="text-align: center; border-bottom:none; text-decoration: none;"><a href="//www.youtube.com/restoreBin?sub_confirmation=1"><i class="fa fa-3x fa-youtube-square" aria-hidden="true"></i></a>  <a href="//www.linkedin.com/company/restorebin"><i class="fa fa-3x fa-linkedin-square" aria-hidden="true"></i></a>  <a href="//facebook.com/restorebin"><i class="fa fa-3x fa-facebook-square" aria-hidden="true"></i></a>  <a href="//twitter.com/restorebin"><i class="fa fa-3x fa-twitter-square" aria-hidden="true"></i></a>  <a href="//instagram.com/restorebin"><i class="fa-3x fa-instagram fa" aria-hidden="true"></i></a>  <a href="//plus.google.com/+restorebin"><i class="fa fa-3x fa-google-plus-square" aria-hidden="true"></i></a></p>';
}
add_shortcode('restoreBinSocial', 'restorebin_social_link_shortcode');

function rbin_button_shortcode( $atts, $content = null ) {
	$output = '<span class="rbin-button">'.do_shortcode($content).'</span>';
	return $output;
}
add_shortcode( 'rbin-button', 'rbin_button_shortcode' );

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) .
'</p>' . get_the_content();
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

function caption_off() {
    return true;
}
add_filter( 'disable_captions', 'caption_off' );

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'https://www.restorebin.com/files/uploads/restoreBin_favicon_NT_v3.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}

// Remove comment date
function wpb_remove_comment_date($date, $d, $comment) { 
    if ( !is_admin() ) {
        return;
    } else { 
        return $date;
    }
}
add_filter( 'get_comment_date', 'wpb_remove_comment_date', 10, 3);
 
// Remove comment time
function wpb_remove_comment_time($date, $d, $comment) { 
    if ( !is_admin() ) {
            return;
    } else { 
            return $date;
    }
}
add_filter( 'get_comment_time', 'wpb_remove_comment_time', 10, 3);

function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

// Remove WP embed script
function speed_stop_loading_wp_embed() {
if (!is_admin()) {
wp_deregister_script('wp-embed');
}
}
add_action('init', 'speed_stop_loading_wp_embed');

add_filter('comment_form_default_fields', 'remove_url');
 function remove_url($fields)
 {
 if(isset($fields['url']))
 unset($fields['url']);
 return $fields;
 }

function restorebin_load_recaptcha_badge_page(){
    if ( !is_page( array( 'contact' ) ) ) {   
        wp_dequeue_script('google-recaptcha');
    }
}
add_action( 'wp_enqueue_scripts', 'restorebin_load_recaptcha_badge_page' );

function ampforwp_amp_remove_actions_single() {
    if ( is_single() ) {
        remove_action( 'amp_post_template_head', 'AMPforWP\\AMPVendor\\amp_post_template_add_canonical' );
    }
}
add_action( 'amp_post_template_head', 'ampforwp_amp_remove_actions_single', 9 );

/* main function */
function js_async_attr($tag){

# Except jquery
$scripts_to_exclude = array('jquery.js');

foreach($scripts_to_exclude as $exclude_script){
    if(true == strpos($tag, $exclude_script ) )
    return $tag;	
}

# Add async to the rest
return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'js_async_attr', 10 );
