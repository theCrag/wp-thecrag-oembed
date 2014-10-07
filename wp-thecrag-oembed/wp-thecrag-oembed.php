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
  wp_oembed_add_provider( '#https?://(www\.)?thecrag\.com/photo/.*#i','https://www.thecrag.com/oembed',true);
  wp_oembed_add_provider( '#https?://(www\.)?thecrag\.com/competition/.*#i','https://www.thecrag.com/oembed',true);
  wp_oembed_add_provider( '#https?://(www\.)?thecrag\.com/(.+/)?ascents(/.*)?#i','https://www.thecrag.com/oembed',true);
/*
  wp_oembed_add_provider( 'http://www.thecrag.com/photo/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'https://www.thecrag.com/photo/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'http://www.thecrag.com/competition/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'https://www.thecrag.com/competition/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'http://www.thecrag.com/ascents/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'https://www.thecrag.com/ascents/*','https://www.thecrag.com/oembed');
*/
}


function wp_iframe_resizer_scripts() {
 wp_register_script('iframe_resizer',plugins_url('/js/iframeResizer.min.js',__FILE__),array('jquery'),'2.6.1');
 wp_enqueue_script('iframe_resizer');
 wp_enqueue_script('iframe_resizer_initialise',plugins_url('js/iframeResizer.initialise.js',__FILE__),array('iframe_resizer'));
}

add_action('wp_enqueue_scripts','wp_iframe_resizer_scripts');
add_action('init','add_oembed_thecrag');

?>
