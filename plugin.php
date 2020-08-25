<?php
/**
 * Plugin Name: SchoolListIt Channel Changer
 * Plugin URI: http://SchooListIt.com/
 * Description: Streamlines communication for teachers and parents. NOTE: you need to have access to your hosting. The underlying PHP Twilio SDK is managed by composer and this plugin will NOT work without it.
 * Author: megphillips91
 * Author URI: https://megphillips91.wordpress.com/
 * Version: 1.1.3
 * License: GPL2+
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

 /*
 SchoolListIt Channel Changer is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

SchoolListIt Channel Changer is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchoolListIt Channel Changer. If not, see http://www.gnu.org/licenses/gpl-3.0.html.
 */
namespace SchoolListIt_Channel_Changer;

 // Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }
   /**
  * Include plugin files
  */

 require_once plugin_dir_path( __FILE__ ) . 'channel-changer.php';
 require_once plugin_dir_path( __FILE__ ) . 'class-classroom.php';
 $vendor_path = str_replace('public_html', '', $_SERVER['DOCUMENT_ROOT']); 
 require_once $vendor_path.'vendor/autoload.php';
 require_once plugin_dir_path( __FILE__ ) . 'class-twilio.php';
 require_once plugin_dir_path( __FILE__ ) . 'endpoints.php';

//echo '<pre>'; var_dump($_SERVER['DOCUMENT_ROOT']); echo '</pre>';
//echo '<pre>'; var_dump($_SERVER['DOCUMENT_ROOT']); echo '</pre>';
