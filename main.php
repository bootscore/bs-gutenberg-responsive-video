<?php
/*Plugin Name: bS5 Gutenberg Responsive Video
Plugin URI: https://bootscore.me/plugins/bs-gutenberg-responsive-video/
Description: This plugin stretches the default Gutenberg video block to the entire width of the container.
Version: 5.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
Text Domain: bootscore
*/




// Register Styles and Scripts
function bs_responsive_video_scripts() {
    
    wp_register_style( 'bs-rv-style', plugins_url('css/bs-rv-style.css', __FILE__) );
        wp_enqueue_style( 'bs-rv-style' );
    }

add_action('wp_enqueue_scripts','bs_responsive_video_scripts');
// Register Styles and Scripts End


// Wrap video player
function bs_wrap_player( $html ) {
 return '<div class="video-block rounded">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'bs_wrap_player', 10, 3 );
add_filter( 'video_embed_html', 'bs_wrap_player' ); // for Jetpack
// Wrap video player End
