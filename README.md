# WP theCrag oEmbed #

A simple WordPress plugin for enabling theCrag.com as an oEmbed provider.

### Install Plugin on WordPress ###

To install the plugin you manually upload the `wp-thecrag-oembed.zip` file and activate the plugin on your WordPress site. You may find the latest zip file and an article on the plugin use at http://www.thecrag.com/article/to-be-written

Once activated urls looking like:

 * `http//www.thecrag.com/photo/*`
 * `https//www.thecrag.com/photo/*`

Will be converted to embedded content using WordPress's oEmbed implementation.

This only works on WordPress version 4.0 and above.


### Setup ###

This repository is intended for developers of theCrag. The output of this repository is a WordPress plugin delivered as a zip file `wp-thecrag-oembed.zip`, which should be made available for consumers of theCrag content on word press sites.

The contents of the zip file are:
   * wp-thecrag-oembed.php

Installation notes assume you have cloned the repository onto a Debian system using git. You will need the zip program `apt-get install zip`.

The plugin is a single php file. To create the plugin zip file run the following command:

`zip wp-thecrag-oembed.zip wp-thecrag-oembed.php`

Once you have created the zip file it must be published so it is available to manually download. To hook into theCrag's current process copy the `wp-thecrag-oembed.zip` file to the static release directory. For example:

`cp wp-thecrag-oembed.zip ../../static/wp/`

### TO DO ###

  * Document some good example sites.
  * Get feedback on the additional url's that would be interesting to embed.
  * Register the plugin on official word press site.

### For more information ###

Contact theCrag directly - support@thecrag.com
