<?php
	
/*
Plugin Name: Gravity Forms Campfire Add-On
Plugin URI: http://www.gravityforms.com
Description: Integrates Gravity Forms with Campfire allowing alerts for Gravity Forms activity to be posted to your Campfire rooms.
Version: 1.1
Author: rocketgenius
Author URI: http://www.rocketgenius.com
Text Domain: gravityformscampfire
Domain Path: /languages

------------------------------------------------------------------------
Copyright 2009 rocketgenius
last updated: October 20, 2010

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

define( 'GF_CAMPFIRE_VERSION', '1.1' );

add_action( 'gform_loaded', array( 'GF_Campfire_Bootstrap', 'load' ), 5 );

class GF_Campfire_Bootstrap {

	public static function load(){
		require_once('class-gf-campfire.php');
		GFAddOn::register('GFCampfire');
	}

}

function gf_campfire() {
	return GFCampfire::get_instance();
}