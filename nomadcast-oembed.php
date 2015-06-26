<?php /*

**************************************************************************

Plugin Name:  NomadCast oEmbed
Version:      1.0.0
Description:  Enables the oEmbed discovery ability in WordPress 2.9's <a href="http://codex.wordpress.org/Embeds">embed feature</a>. Only applies to users with the <code>unfiltered_html</code> capability (Administrators and Editors by default). oEmbed discovery allows the embedding of content from unknown sites that support the oEmbed discovery tag. Please be careful not to embed content from any malicious site!
Author:       NomadCast
Author URI:   https://www.nomadcast.com
License:      GPL2

**************************************************************************/

wp_oembed_add_provider( '#https?://www.nomadcast.com/(stream|recording)/.*#i', 'https://www.nomadcast.com/oembed.{format}', true); 
?>