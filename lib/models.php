<?php


add_filter( 'psp_settings_sections_addons', 'psp_ssa_settings_section' );
function psp_ssa_settings_section( $sections ) {

    $sections[ 'psp_ssa_settings' ] = __( 'Simply Schedule Appointments', 'psp_projects' );

    return $sections;

}

add_filter( 'psp_settings_addons', 'psp_ssa_settings' );
function psp_ssa_settings( $settings ) {

    $psp_ssa_settings[ 'psp_ssa_settings' ] = array(
        'psp_ssa_title'  => array(
            'id' => 'psp_ssa_title',
            'name' => '<h2>' . __( 'Simply Schedule Appointments', 'psp_projects' ) . '</h2>',
            'type' => 'html',
        ),
        'psp_ssa_active' => array(
            'id'    => 'psp_ssa_active',
            'name'  => __( 'Allow Appointment Scheduling', 'psp_projects' ),
            'type'  => 'select',
            'options' => array(
                 'no' => __( 'No', 'psp_projects' ),
                 'yes' => __( 'Yes', 'psp_projects' ),
            )
        )

    );

    return array_merge( $settings, $psp_ssa_settings );

}
