<?php
/**
 * Plugin Name: WP theCrag oEmbed
 * Plugin URI: http://www.thecrag.com/article/oembed
 * Description: converts theCrag links to embedded content in your WordPress site
 * Version: 1.0
 * Author: Simon Dale
 * Author URI: http://www.thecrag.com/climber/scd
 * License: GPL2
 *
 */

function add_oembed_thecrag(){
  wp_oembed_add_provider( 'http://www.thecrag.com/photo/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'https://www.thecrag.com/photo/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'http://www.thecrag.com/competition/*','https://www.thecrag.com/oembed');
  wp_oembed_add_provider( 'https://www.thecrag.com/competition/*','https://www.thecrag.com/oembed');
}
add_action('init','add_oembed_thecrag');


?>
