<?php

/*
Plugin Name: ChillThemes Shortcodes
Plugin URI: http://wordpress.org/plugins/chillthemes-shortcodes
Description: Provides custom shortcodes for use in any of our Chill Themes.
Version: 2.0
Author: ChillThemes
Author URI: http://chillthemes.net
Author Email: itismattadams@gmail.com
License:

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*/

/* Load the shortcode functions. */
require_once( dirname( __FILE__ ) . '/shortcodes.php');

/* Registers and enqueues shortcodes styles. */
function chillthemes_shortcodes_styles() {
	wp_enqueue_style( 'chillthemes-font-awesome', plugins_url( 'css/font-awesome.css', __FILE__ ), false, null );
	wp_enqueue_style( 'chillthemes-shortcodes', plugins_url( 'css/shortcodes.css', __FILE__ ), false, null );
}
add_action( 'wp_enqueue_scripts', 'chillthemes_shortcodes_styles' );

function chillthemes_shortcodes_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'chillthemes-shortcodes-accordion', plugins_url( 'js/accordion.js', __FILE__ ), array( 'jquery', 'jquery-ui-accordion' ), false, null );
	wp_register_script( 'chillthemes-shortcodes-fitvids', plugins_url( 'js/fitvids.js', __FILE__ ), array( 'jquery', 'jquery-ui-accordion' ), false, null );
	wp_register_script( 'chillthemes-shortcodes-tabs', plugins_url( 'js/tabs.js', __FILE__ ), array( 'jquery', 'jquery-ui-tabs' ), false, null );
	wp_register_script( 'chillthemes-shortcodes-toggle', plugins_url( 'js/toggle.js', __FILE__ ), array( 'jquery' ), false, null );
}
add_action( 'wp_enqueue_scripts', 'chillthemes_shortcodes_scripts' );

?>