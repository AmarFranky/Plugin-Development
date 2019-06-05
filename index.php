<?php
/*
Plugin Name: Custom Popup
Plugin URI: 
Description: A plugin to dispaly popup with information on a click of button. Add shortcode [modal_box content="message"] in any page.
Author: Underscore Admin 
Version: 1.0
Author URI: 
*/

add_action('admin_menu', 'my_admin_menu');


function my_admin_menu () {
     add_menu_page('Custom Popup Button', 'Custom Popup', 'manage_options', 'custom_setting_page', 'popup_settings_page');
} 

function popup_settings_page() {
    echo "<h2>" . __( 'Custom Popup Button Settings', 'menu-test' ) . "</h2>";
    include_once('custom_button_setting.php');
}





function create_popup_function( $atts, $content = null, $txt) {
  
    // set up default parameters
    extract(shortcode_atts(array(
        'content' => ''
    ), $atts));

    $output .= '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="
background-color: orange">' .get_option('btn_text') .'</button>';
    $output .= '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="margin-top:20%">
    <div class="modal-content">
        <div class="modal-body">
          <h3 style="color:#000 !important">'.$content.'</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>';
            
    return $output;
}
add_shortcode('modal_box', 'create_popup_function');


function wptuts_scripts_basic()
{
  
    
    wp_register_script( 'custom-js', plugins_url( '/custom.js', __FILE__ ));
    wp_enqueue_script( 'custom-js' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
