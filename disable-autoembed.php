<?php
/**
 * Plugin Name: Disable Auto Embed
 * Version: 1.0
 * Description: Disables Auto Embeds in the Visual Editor Preview
 * Author: Sophy
 * Author URI: http://themecountry.com/
 * Plugin URI: http://themecountry.com/disable-autoembed
 *
 *
 * License: GPLv2 or later
 *
 *	Copyright (C) 2012 Dominik Schilling
 *
 *	This program is free software; you can redistribute it and/or
 *	modify it under the terms of the GNU General Public License
 *	as published by the Free Software Foundation; either version 2
 *	of the License, or (at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
/**
*
* Remove autoembed in frontend
*/
function ps_disable_frontend_autoembed(){
	
	if ( ! is_admin() )
 	remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );

}
add_action('init', 'ps_disable_autoembed', 999);

function ps_disable_mce_auto_embeds( $plugins ) {
    return array_diff( $plugins, array('wpview') );
}
add_filter( 'tiny_mce_plugins', 'ps_disable_mce_auto_embeds' );

