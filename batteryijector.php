<?php 
/*
Plugin Name: Battery Ijector
Plugin URI: http://www.crewsoftwaresolution.com
Description: Battery Ijector
Author: Crew Soft
Version: 1.0
Author URI: http://www.crewsoftwaresolution.com
*/
define("PLUGIN_DIR_PATH",plugin_dir_path( __FILE__ ));
define("PLUGIN_URL",plugins_url());
//include("../../config.php");
function batteryijector_admin_actions() {
	add_menu_page(
		"Battery Ijector",
		"Battery Ijector",
		"manage_options",
		"batteryijector",
		"custom_admin_view",
		"dashicons-tag",
		11
	);
}

add_action("admin_menu","batteryijector_admin_actions");
function custom_admin_view()
{
	include_once PLUGIN_DIR_PATH."/view/dashboard.php";
}

function batteryijector_activate() {	
}

register_activation_hook( __FILE__, 'batteryijector_activate' );

function batteryijector_deactivation() {	
}

register_deactivation_hook( __FILE__, 'batteryijector_deactivation' );

function view_map_users_fronside($atts) {		
		
}
add_shortcode('viewmapusersfronside', 'view_map_users_fronside');

add_action('wp_footer', 'wpshout_action_example'); 
function wpshout_action_example() { 
	$t=time();	
	$timeStamp = date("Y-m-d H:i:s",$t);
    echo '<meta http-equiv="X-BATTERY-INJECTOR" content="' . $timeStamp . '"/>'; 
    echo '<!-- battery=' . $timeStamp . ' -->'; 
}

