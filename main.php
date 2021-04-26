<?php
/*Plugin Name: bS5 Gutenberg Responsive Video
Plugin URI: https://bootscore.me/plugins/bs-gutenberg-responsive-video/
Description: This plugin stretches the default Gutenberg video block to the entire width of the container.
Version: 5.0.0.1
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
Text Domain: bootscore
*/


// Wrap video player
function bs_wrap_player( $html ) {
 return '<div class="ratio ratio-16x9">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'bs_wrap_player', 10, 3 );
add_filter( 'video_embed_html', 'bs_wrap_player' ); // for Jetpack
// Wrap video player End
