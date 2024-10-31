<?php
/**
* Plugin Name: BookioPro widget
* Plugin URI: http://wordpress.org/extend/plugins/reservation-system-for-restaurants
* Description: Although your restaurant is closed, this plugin attracts more customers to your restaurant thanks to the possibility of online booking from your website. Free your staff from answering phone reservations and replying on booking emails. Pay full attention to your guests!
* Version: 1.0
* Author: BookioPro
* Author URI: http://www.bookiopro.com
* License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'BP_PLUGIN_NAME', 'bookiopro-widget' );
define( 'BP_PLUGIN_NAME_PLUGIN', plugin_basename( __FILE__ ) );
define( 'BP_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'BP_PLUGIN_URL', plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) );

function init_bookiopro_widget() {

	//Include the widget

	if ( ! class_exists( 'Bookiopro_Widget' ) ) {
		require 'classes/widget.php';

	}

	include_once "inc/display-widgets.php";
}

/*
 * @DESC: Register widget
 */
add_action( 'widgets_init', 'init_bookiopro_widget' );
add_action( 'widgets_init', create_function( '', 'register_widget( "Bookiopro_Widget" );' ) );
