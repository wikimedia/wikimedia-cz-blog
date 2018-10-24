<?php 
/*
Plugin Name: WMCZ Blog - vlastní kód a CSS
Plugin URI: http://wikimedia.cz
Description: Plugin aplikující vlastní zmeny a prizpusobení
Version: 1.0
Author: Dominik Matus
Author URI: http://dominikmatus.cz/
License: GPLv2
*/ 
  

function add_meta_tags() {      

        echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '" />';
}
add_action( 'wp_head', 'add_meta_tags' , 2 );



?>
