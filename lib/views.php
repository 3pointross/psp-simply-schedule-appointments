<?php
add_action( 'psp_footer', 'psp_ssa_modal_footer' );
function psp_ssa_modal_footer() {

     if( psp_get_option('psp_ssa_active', 'no' ) != 'yes' ) {
          return;
     } ?>

     <div class="psp-modal" id="psp-ssa-dialog">
          <div class="psp-modal-content">

               <div class="psp-modal-header">
                    <div class="psp-h2"><?php esc_html_e( 'Schedule an Appointment', 'psp_projects' ); ?></div>
                    <a class="modal-close psp-modal-x" href="#"><i class="fa fa-close"></i></a>
               </div>

               <div class="psp-modal-body">
                    <?php echo do_shortcode('[ssa_booking]'); ?>
               </div>

          </div>
     </div>

     <?php
}

add_action( 'psp_section_nav_actions_start', 'psp_ssa_schedule_button' );
function psp_ssa_schedule_button() {

     if( psp_get_option('psp_ssa_active', 'no' ) != 'yes' ) {
          return;
     } ?>

     <a href="#psp-ssa-dialog" class="psp-btn psp-modal-btn"><i class="fa fa-calendar-o"></i> <?php esc_html_e( 'Schedule Appointment', 'psp_projects' ); ?></a>

     <?php

}
