<?php
/**
 * Plugin Name: WP theCrag oEmbed
 * Plugin URI: http://www.thecrag.com/article/oembed
 * Description: converts theCrag links to embedded content in your WordPress site
 * Version: 1.1.1
 * Author: Simon Dale
 * Author URI: http://www.thecrag.com/climber/scd
 * License: MIT license
 *
 */

function add_oembed_thecrag(){
  wp_oembed_add_provider( '#https?://(www\.)?thecrag\.com/.*#i','https://www.thecrag.com/oembed',true);
  wp_oembed_add_provider( '#https?://brendan\.thecrag\.com/.*#i','https://brendan.thecrag.com/oembed',true);
}


function wp_iframe_resizer_scripts() {
 wp_register_script('iframe_resizer',plugins_url('/js/iframeResizer.min.js',__FILE__),array('jquery'),'2.6.1');
 wp_enqueue_script('iframe_resizer');
 wp_enqueue_script('iframe_resizer_initialise',plugins_url('js/iframeResizer.initialise.js',__FILE__),array('iframe_resizer'));
}

add_action('wp_enqueue_scripts','wp_iframe_resizer_scripts');
add_action('init','add_oembed_thecrag');

?>
