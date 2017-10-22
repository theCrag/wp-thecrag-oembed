# WP theCrag oEmbed #

A simple WordPress plugin for enabling theCrag.com as an oEmbed provider.

https://www.thecrag.com/article/oembed

### Install Plugin on WordPress ###

To install the plugin via zip:

1) Download from here: https://github.com/theCrag/wp-thecrag-oembed/archive/master.zip
2) Unzip and move it into /wordpress/wp-content/plugins/wp-thecrag-oembed/

To install via git:

```
cd wp-content/plugins
git clone https://github.com/theCrag/wp-thecrag-oembed.git
```

Then in the admin GUI to go /wordpress/wp-admin/plugins.php and activate the plugin

Once activated urls such as these will be converted to embedded content using WordPress's oEmbed implementation.

 * `https://www.thecrag.com/climbing/australia/ebor-gorge/area/12094801/routes`


This only works on WordPress version 4.0 and above.


### Setup ###

This repository is intended for wordpress user of theCrag. The output of this repository is a WordPress plugin delivered as a zip file `wp-thecrag-oembed.zip`, which should be made available for consumers of theCrag content on word press sites.

It is required that thecrag embedded iframes be dynamically resized to the embeded content. This is quite a tedious task for cross domain iframes, but luckily we can use David Bradshaw's iframe-resizer project (https://github.com/davidjbradshaw/iframe-resizer) to achieve this. The `iframeResizer.min.js` javascript file is included in this plugin.

The contents of the zip file are:
> wp-thecrag-oembed
>   wp-thecrag-oembed.php
>   js
>     iframeResizer.min.js
>     iframeResizer.initialise.js

Installation notes assume you have cloned the repository onto a Debian system using git. You will need the zip program `apt-get install zip`.

The plugin is a single php file. To create the plugin zip file run the following command:

`.build-word-press-plugin`

Once you have created the zip file it must be published so it is available to manually download. To hook into theCrag's current process copy the `wp-thecrag-oembed.zip` file to the static release directory. For example:

`cp wp-thecrag-oembed.zip ../../static/wp/`

### TO DO ###

  * Document some good example sites.
  * Get feedback on the additional url's that would be interesting to embed.
  * Register the plugin on official word press site.

### For more information ###

Contact theCrag directly - support@thecrag.com
