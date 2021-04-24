<?php
/**
 * Plugin Name: Project Panorama - Simply Schedule Appointments
 * Plugin URI: http://www.projectpanorama.com
 * Description: Integrate Project Panorama with Simply Schedule Appointments
 * Version: 1.0
 * Author: SnapOrbital
 * Author URI: https://www.projectpanorama.com
 * License: GPL2
 * Text Domain: psp_projects
 */

do_action( 'pspbb_before_init' );

if( !function_exists('psp_get_option') ) {
     return; // fail silently
}

$defintions = array(
    'PSP_SSA_VER'  =>  '1.0',
    'PSP_SSA_PATH' =>  plugin_dir_path( __FILE__ ),
    'PSP_SSA_URL'  =>  plugin_dir_url( __FILE__ )
);

foreach( $defintions as $definition => $value ) {
    if( !defined($definition) ) define( $definition, $value );
}

include_once( 'lib/init.php' );


add_action( 'plugins_loaded', 'psp_ssa_localize_init' );
function psp_ssa_localize_init() {
     load_plugin_textdomain( 'psp_projects', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
}


require 'vendor/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/3pointross/psp-buddypress/',
	__FILE__,
	'psp-simply-schedule-appointments'
);

do_action( 'pspbb_after_init' );
