<?php 
/**
 * Plugin Name: WMCZ Blog - vlastní kód a CSS
 * Plugin URI: http://wikimedia.cz
 * Description: Plugin aplikující vlastní zmeny a prizpusobení
 * Version: 1.0
 * Author: Dominik Matus, Martin Urbanec, Wikimedia Czech Republic
 * Author URI: http://dominikmatus.cz/
 * License: GPLv2
**/

function add_meta_tags() {      

        echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '" />';
}
add_action( 'wp_head', 'add_meta_tags' , 2 );

function wmcz_handle_wdqs_embed( $matches, $attr, $url, $rawattr ) {
        global $content_width;
        return sprintf(
                '<iframe style="width: 80vw; height: 50vh; border: none;" src="https://query.wikidata.org/embed.html#%s" referrerpolicy="origin" sandbox="allow-scripts allow-same-origin allow-popups"></iframe>',
                esc_attr($matches[1])
        );
}

add_action(
        'init', function() {
                wp_embed_register_handler(
                        'wdqs',
                        '@https?://query\.wikidata\.org/[^#]*#(.*)@i',
                        'wmcz_handle_wdqs_embed'
                );
        }
);

?>
