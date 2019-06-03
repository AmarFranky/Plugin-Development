
<?php
/*
Plugin Name: My Custom Footer
Plugin URI: 
Description: This plugin will be useful to add the custom footer content.
Author: Underscore Admin
Version: 1.0
Author URI: 
*/

add_action('admin_menu', 'my_admin_menu');


function my_admin_menu () {
	 add_menu_page('Footer Text title', 'Custom Footer', 'manage_options', 'footer_setting_page', 'mt_settings_page');
} 

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
} 

function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_setting.php');
}
?>


<?php
function your_function() {
   echo "<div align='center' style='color: red;
    font-size: 20px;
    margin: 20px; '>".get_option('footer_text')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>