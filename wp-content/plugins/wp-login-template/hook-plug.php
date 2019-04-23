<?php

/*
Plugin Name:  Wordpress  Login Template
Plugin URI: http://rajuahmed.0fees.net
Description: This plugin is changing custome template in the wordpress login page
Version: 2.1
Author: Raju Ahmed
Author URI: http://rajuahmed.0fees.net
License: GPLv2 or later
*/

/*
Copyright (C) 2014 Raju Ahmed

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANT ABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*Some Set-up*/
define('WPRDPRESS_CUSTOM_LOGIN_TEMPLATE', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
/* Adding Plugin custm CSS file */
wp_enqueue_style('wordpress-custom-login-template', WPRDPRESS_CUSTOM_LOGIN_TEMPLATE.'css/style.css');

// Color Picker
add_action( 'admin_enqueue_scripts', 'wp_csutom_log_themerauj0715013_color_picker' );
function wp_csutom_log_themerauj0715013_color_picker( $hook_suffix ) {
// first check that $hook_suffix is appropriate for your admin page
wp_enqueue_style( 'wp-color-picker' );
wp_enqueue_script( 'my-script-handle', plugins_url('js/color-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}
// End Color Picker





//Start Out put show in the head tag
function custom_login_output_data_mukta0715013() { 
global $raju_wp_custom_log_options;
//call option global
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);



?>
<style type="text/css">

body.login h1 a{
background-image:url(<?php echo $wplogin_settings['custom_logo_url_raju']; ?>);
-webkit-background-size:320px 75px;
-moz-background-size:320px 75px;
-o-background-size:320px 75px;
background-size:320px 75px;
height:75px;
margin-bottom:15px;
padding-bottom:0px;
width:320px;

}




html{
 background-image: url(  <?php echo plugins_url( '/images/bg.png', __FILE__ )  ?>)  !important;
background-repeat:no-repeat;
background-position:fixed;
background-position:0 0;
-webkit-background-size:/*@@prefixmycss->No equivalent*/;
-moz-background-size:cover;
-o-background-size:/*@@prefixmycss->No equivalent*/;
background-size:cover;
}

body.login div#login {
  background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
  height: auto;
  left: 50%;
  margin: -225px auto auto -200px;
  padding: 40px;
  position: absolute;
  top: 50%;
  width: 320px;
}

.login .button-primary {
 background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
float:right;
border:none;
text-shadow: #333333 0 1px 0;
color:#fff;
width:60px;
}



</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_output_data_mukta0715013' );

include('inc/custom-feature.php');

// End Out Put Data


//Start Default Data Option
$raju_wp_custom_log_options= array(
'bg_color' => '#666',
'raio_button' => '#EEEE22', //radio button
'wp_custom_loginbodybg_colorcss' => '#EA0606',
'bgpattern_raio_button' => '',
'loginareabgcolor13' => 'green',

'loginformbgcolor1307' => '#F33E0F',
'textcoloroffromarea' => '#fff',
'texthovercolorofformarea' => '#F33E0F',
'submitbuttonbgcolor1307' => '#F33E0F',
'submitbuttonbuttonhoverbgcolor45' => '#F94A0E',
'textcolorofsubmitbutton45' => '#5C6369',
'texthovercolorofsubmitbutotn89' => '#fff',
'bgcolorofwarningmessage909' => '#fff',
'textcolorofwarningmessage6765' => '#666',
'textcoloroflostpassword987' => '#fff',
'linkhovercolor876' => '#F64211',
'logo_radio_options' => 'false',
'advancedcolorsetting_raio_button' => 'yes',



);
// End Default Data Options

//Start is_admin()
//Register Option
if (  is_admin() ):
function wplog_custom_template_raju0715013_register_options(){
//field,option,data validate
register_setting('raju_wp_custom_log_options_fields', 'raju_wp_custom_log_options', 'raju_wp_custom_log_options_validate');
}
add_action('admin_init', 'wplog_custom_template_raju0715013_register_options'); 

// Data validate 
function raju_wp_custom_log_options_validate($input) {
global $raju_wp_custom_log_options ;
global $logo_radio_options; //global option
global $bgpattern_raio_button; //Radio Button
 //Radio Button
global $advancedcolorsetting_raio_button; //Radio Button
$settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);  //get option
$input['bg_color'] = wp_filter_post_kses( $input['bg_color'] ); 
$input['custom_logo_url_raju'] = wp_filter_post_kses( $input['custom_logo_url_raju'] ); 
$input['custom_bodybgimage_url_raju'] = wp_filter_post_kses( $input['custom_bodybgimage_url_raju'] ); 
$input['wp_custom_loginbodybg_colorcss'] = wp_filter_post_kses( $input['wp_custom_loginbodybg_colorcss'] ); 
$input['loginareabgcolor13'] = wp_filter_post_kses( $input['loginareabgcolor13'] ); 
$input['loginformbgcolor1307'] = wp_filter_post_kses( $input['loginformbgcolor1307'] ); 
$input['textcoloroffromarea'] = wp_filter_post_kses( $input['textcoloroffromarea'] ); 
$input['texthovercolorofformarea'] = wp_filter_post_kses( $input['texthovercolorofformarea'] ); 
$input['submitbuttonbgcolor1307'] = wp_filter_post_kses( $input['submitbuttonbgcolor1307'] ); 
$input['submitbuttonbuttonhoverbgcolor45'] = wp_filter_post_kses( $input['submitbuttonbuttonhoverbgcolor45'] ); 
$input['textcolorofsubmitbutton45'] = wp_filter_post_kses( $input['textcolorofsubmitbutton45'] ); 
$input['texthovercolorofsubmitbutotn89'] = wp_filter_post_kses( $input['texthovercolorofsubmitbutotn89'] ); 
$input['bgcolorofwarningmessage909'] = wp_filter_post_kses( $input['bgcolorofwarningmessage909'] ); 
$input['textcolorofwarningmessage6765'] = wp_filter_post_kses( $input['textcolorofwarningmessage6765'] ); 
$input['textcoloroflostpassword987'] = wp_filter_post_kses( $input['textcoloroflostpassword987'] ); 
$input['linkhovercolor876'] = wp_filter_post_kses( $input['linkhovercolor876'] ); 



$prev_logo_img = $settings['value'];
if (!array_key_exists ($input['value'] ,$logo_radio_options))
$input['value'] =$prev_logo_img;

$prev_bgpattern = $settings['value'];
if (!array_key_exists ($input['value'] ,$bgpattern_raio_button))
$input['value'] =$prev_bgpattern;


$prev_advancedcolorsetting = $settings['value'];
if (!array_key_exists ($input['value'] ,$advancedcolorsetting_raio_button))
$input['value'] =$prev_advancedcolorsetting;

return $input;
}
endif;

//End is_admin()

//Radio Button Start

// Start login body backgroun image radio button	
global $raju_wp_custom_log_options;
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
$logo_radio_options= array(
'logo_radio_options_no' => array(
'value' => 'false',
'label' => ' Custom Image Login Template'
),
'logo_radio_options_yes' => array(
'value' => 'true',
'label' => 'Custom CSS Login Template'
),
);


$bgpattern_raio_button= array(
'radio_button_fexed' => array(
'value' => 'window',
'label' => 'Fit to window',
),
'radio_button_reapeat' => array(
'value' => 'repeat',
'label' => 'Repeat',
),
'radio_button_norepeat' => array(
'value' => 'no-repeat',
'label' => 'No Repeat'
),
'radio_button_repeatx' => array(
'value' => 'repeat-x',
'label' => 'Repeat X'
),
'radio_button_repeaty' => array(
'value' => 'repeat-y',
'label' => 'Repeat Y'
),
);





global $raju_wp_custom_log_options;
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);

$maunsetting_bg_imagecolor= $wplogin_settings['logo_radio_options'];
if(($maunsetting_bg_imagecolor=='true')){
function bg_true_functions_active() { 
global $raju_wp_custom_log_options; //call option global
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
?>
<style type="text/css">

body.login div#login form#loginform,body.login div#login form#lostpasswordform, html{
background:none repeat scroll 0 0 <?php echo $wplogin_settings['wp_custom_loginbodybg_colorcss']; ?>;
}
body.login div#login{
background:<?php echo $wplogin_settings['loginareabgcolor13']; ?>;
height:auto;
left:50%;
margin:-225px auto auto -200px;
padding:40px;
position:absolute;
top:50%;
width:320px;
}

</style>
<?php }
add_action( 'login_enqueue_scripts', 'bg_true_functions_active' );
}else{
//start backgroun pattern radio button
global $raju_wp_custom_log_options;
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
$pattern_arraytest= $wplogin_settings['bgpattern_raio_button'];
if(($pattern_arraytest=='repeat-y') || ($pattern_arraytest=='repeat-x') || ($pattern_arraytest=='repeat') || ($pattern_arraytest=='no-repeat')){

function dksjflskdfjslkdfjlksdjfsdfsdf() { 
global $raju_wp_custom_log_options; //call option global
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
?>
<style type="text/css">

html {
  background-image: url(<?php echo $wplogin_settings['custom_bodybgimage_url_raju']; ?>) !important;
  background-repeat: <?php echo $wplogin_settings['bgpattern_raio_button']; ?>;
}	

body.login div#login {
  background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
  height: auto;
  left: 50%;
  margin: -225px auto auto -200px;
  padding: 40px;
  position: absolute;
  top: 50%;
  width: 320px;
}

.login .button-primary {
 background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
float:right;
border:none;
text-shadow: #333333 0 1px 0;
color:#fff;
width:60px;
}

</style>
<?php }
add_action( 'login_enqueue_scripts', 'dksjflskdfjslkdfjlksdjfsdfsdf' );
}else

{
//end pattern
function bg_false_functions_active() { 
global $raju_wp_custom_log_options; //call option global
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
?>
<style type="text/css">

html{
 background-image: url(<?php echo $wplogin_settings['custom_bodybgimage_url_raju']; ?>) !important;
background-repeat:no-repeat;
background-position:fixed;
background-position:0 0;
-webkit-background-size:/*@@prefixmycss->No equivalent*/;
-moz-background-size:cover;
-o-background-size:/*@@prefixmycss->No equivalent*/;
background-size:cover;
}

body.login div#login {
  background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
  height: auto;
  left: 50%;
  margin: -225px auto auto -200px;
  padding: 40px;
  position: absolute;
  top: 50%;
  width: 320px;
}

.login .button-primary {
 background: url(  <?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) ;
float:right;
border:none;
text-shadow: #333333 0 1px 0;
color:#fff;
width:60px;
}




</style>
<?php }
add_action( 'login_enqueue_scripts', 'bg_false_functions_active' );
}
}
//end bg option
// start pattern option
//End backgroun pattern radio button
// End login body backgroun image radio button
// End Radio Button
//start advanced color setting 
$advancedcolorsetting_raio_button= array(
'advancedcolorsetting_radio_options_no' => array(
'value' => 'no',
'label' => ' No, I like to use default style'
),
'advancedcolorsetting_radio_options_yes' => array(
'value' => 'yes',
'label' => 'Yes, I like to use custom style'
),
);

global $raju_wp_custom_log_options;
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);

$advancedcolorsetting_output= $wplogin_settings['advancedcolorsetting_raio_button'];
if(($advancedcolorsetting_output=='yes')){
function advancedcolorsetting_output_positive_result_987() { 
global $raju_wp_custom_log_options; //call option global
$wplogin_settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);
?>
<style type="text/css">

body.login div#login form#loginform {
background: <?php echo $wplogin_settings['loginformbgcolor1307']; ?>;

}

body.login div#login form#loginform, body.login div#login form#lostpasswordform{
border:0 solid;
-webkit-border-radius:0;
-moz-border-radius:0;
border-radius:0;
-webkit-box-shadow:0 0 0;
-moz-box-shadow:0 0 0;
box-shadow:0 0 0;
margin-left:0;
}




body.login div#login form#loginform, body.login div#login form#lostpasswordform {
  border: 0 solid;
  border-radius: 0 0 0 0;
  box-shadow: 0 0 0;
  margin-left: 0;
}



.login form {
 
  border: 1px solid #E5E5E5;
  box-shadow: 0 4px 10px -1px rgba(200, 200, 200, 0.7);
  font-weight: 400;
  margin-left: 8px;
  padding: 26px 24px 46px;
}



body.login div#login form#loginform p label, body.login div#login form#lostpasswordform p label{
color:<?php echo $wplogin_settings['textcoloroffromarea']; ?> !important;
}


body.login div#login form#loginform p label:hover{
color:<?php echo $wplogin_settings['texthovercolorofformarea']; ?> !important;
}




.login .button-primary {

float:right;
background-color:<?php echo $wplogin_settings['submitbuttonbgcolor1307']; ?>!important;
border:none;
text-shadow: #333333 0 1px 0;
color:<?php echo $wplogin_settings['textcolorofsubmitbutton45']; ?>;
width:60px;
}
.login .button-primary:hover {
background-color:<?php echo $wplogin_settings['submitbuttonbuttonhoverbgcolor45']; ?>!important;
border:none;
text-shadow: #333333 0 -1px 0;
color: <?php echo $wplogin_settings['texthovercolorofsubmitbutotn89']; ?>;
}
.login .button-primary:active {
background-color:#fff !important;
border:none;
text-shadow: #333333 0 -1px 0;
color: #fff;
}




body.login div#login a{
color:<?php echo $wplogin_settings['textcoloroflostpassword987']; ?> !important;
text-decoration:none;
text-shadow:0 0 0;
}

body.login div#login a:hover{
color:<?php echo $wplogin_settings['linkhovercolor876']; ?> !important;

}


body.login div.error, body.login #login_error {
  background-color: <?php echo $wplogin_settings['bgcolorofwarningmessage909']; ?> !important;
  border: 0 solid;
  border-radius: 0;
  color: <?php echo $wplogin_settings['textcolorofwarningmessage6765']; ?> !important;
  margin: 0 0 15px;
}


</style>
<?php }
add_action( 'login_enqueue_scripts', 'advancedcolorsetting_output_positive_result_987' );

}else{
function advancedcolorsetting_output_nagative_result_987() { 
?>
<style type="text/css">

body.login div#login form#loginform, body.login div#login form#lostpasswordform{
border:0 solid;
-webkit-border-radius:0;
-moz-border-radius:0;
border-radius:0;
-webkit-box-shadow:0 0 0;
-moz-box-shadow:0 0 0;
box-shadow:0 0 0;
margin-left:0;
}




body.login div#login form#loginform, body.login div#login form#lostpasswordform {
  border: 0 solid;
  border-radius: 0 0 0 0;
  box-shadow: 0 0 0;
  margin-left: 0;
}



.login form {
  background:#666;
  border: 1px solid #E5E5E5;
  box-shadow: 0 4px 10px -1px rgba(200, 200, 200, 0.7);
  font-weight: 400;
  margin-left: 8px;
  padding: 26px 24px 46px;
}


#login_error, .login .message {
margin-left: 6px;
padding: 13px;
margin-top: -26px;
margin-bottom: 24px;
width: 273px;
}
.login #nav a, .login #backtoblog a {
color:#fff;
text-decoration: none;
}

.login .button-primary {

float:right;
background:url(<?php echo plugins_url( '/images/outer.png', __FILE__ )  ?>) !important;
border:none;
text-shadow: #333333 0 1px 0;
color:#fff;
width:60px;
}



</style>
<?php }
add_action( 'login_enqueue_scripts', 'advancedcolorsetting_output_nagative_result_987' );
}
//End advanced color setting 

// Option Page Start
function wp_custom_loginpage_register_setting_raju0715013(){
//create new settings menu
add_menu_page( 'WP  Login Template  ', 'WP Login Template',
'manage_options', __FILE__,
'wp_custom_loginpage_active_setting_raju0715013',
plugins_url( '/images/logo-m.png', __FILE__ ) );
}
add_action( 'admin_menu', 'wp_custom_loginpage_register_setting_raju0715013' );
//End Option Page 

// Function Active
function wp_custom_loginpage_active_setting_raju0715013() {
global $raju_wp_custom_log_options;  //global data
global $bgpattern_raio_button; //global data
global $logo_radio_options; //global data
global $advancedcolorsetting_raio_button; //global data

if (!isset($_REQUEST['updated']))
$_REQUEST['updated']= false;
?>


<div id="wpbody">
<div class="wrap">
<?php if (false !== $_REQUEST['updated']):
endif ;
?>

<h2 ><?php _e('Wordpress Custom Login Template Setting  ') ?></h2>
<a href="http://rajuahmed.0fees.net/plugins" target="_blank"><p class="button button-primary">Global Setting</p></a>
<a href="http://rajuahmed.0fees.net/plugins" target="_blank"><p class="button button-primary">Help</p></a>
<a href="http://rajuahmed.0fees.net/wp-login.php" target="_blank"><p class="button button-primary">Demo</p></a>
<a href="http://rajuahmed.0fees.net/supports" target="_blank"><p class="button button-primary">Live Help</p></a>
<h3 style="border-bottom: 1px solid #CCCCCC;" >  <span style="  border-bottom: 4px solid #46B3E6;"><?php _e('WP Login Setting  ') ?></span></h3>
<form action="options.php" method="post">
<?php $settings = get_option('raju_wp_custom_log_options', $raju_wp_custom_log_options);   ?>
<?php settings_fields( 'raju_wp_custom_log_options_fields' ); ?>
<table class="form-table">
<tbody>

<tr valign="top">
<th scope="row">
<label for="logo_radio_options"><?php _e('Login  Template Style ') ?></label>
</th>
<td>
<?php foreach ($logo_radio_options as $activate): ?>
<input type="radio" name="raju_wp_custom_log_options[logo_radio_options]" id="<?php echo $activate['value'] ; ?>" value="<?php  esc_attr_e($activate['value']) ;?>" <?php  checked( $settings['logo_radio_options'] , $activate['value']); ?> / >
<label for="<?php echo $activate['value'] ; ?>"><?php echo $activate['label'] ; ?></label><br/>
<?php endforeach ;?>
<p class="description"><?php _e('(1)You can change your template here.If you are planning to use an image in login template background.Select "Custom Image Login Template" and specify backgroun image url . <br/>(2) If you are planning to use css color background. Select "Custom CSS Login Template" . You can customize color template.

') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="custom_logo_url_raju"><?php _e('Custom Logo URL ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[custom_logo_url_raju]" id="custom_logo_url_raju" value="<?php echo stripslashes($settings['custom_logo_url_raju']); ?>"  size="50%" placeholder="http://" >
<p class="description"><?php _e('Choose your Logo screen logo.Any size logo will resized as 320px width and 75px height.but you should use 320px width and 75px height size image') ?></p>
</td>
</tr>

</tbody>
</table>

<h3 style="border-bottom: 1px solid #CCCCCC;" >  <span style="  border-bottom: 4px solid #46B3E6;"><?php _e('Image Login Template Setting ') ?></span></h3>
<table class="form-table">
<tbody>

<tr valign="top">
<th scope="row">
<label for="custom_bodybgimage_url_raju"><?php _e(' Background Image URL ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[custom_bodybgimage_url_raju]" id="custom_bodybgimage_url_raju" value="<?php echo stripslashes($settings['custom_bodybgimage_url_raju']); ?>"  size="50%" placeholder="http://" >
<p class="description"><?php _e('If you selected "Custom Image Login Template" on top, Changing backgroun image url here.Try to use bigger dimention image here.If you use pattern or small texture, Please use backgroun repeat from below. ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="bgpattern_raio_button"><?php _e('Background Pattern ') ?></label>
</th>
<td>
<?php foreach ($bgpattern_raio_button as $activate_pattern): ?>
<input type="radio" name="raju_wp_custom_log_options[bgpattern_raio_button]" id="<?php echo $activate_pattern['value'] ; ?>" value="<?php  esc_attr_e($activate_pattern['value']) ;?>" <?php  checked( $settings['bgpattern_raio_button'] , $activate_pattern['value']); ?> / >
<label for="<?php echo $activate_pattern['value'] ; ?>"><?php echo $activate_pattern['label'] ; ?></label><br/>
<?php endforeach ;?>
<p class="description"><?php _e('You can change backgroun image pattern settings from here') ?></p>
</td>
</tr>

</tbody>
</table>

<h3 style="border-bottom: 1px solid #CCCCCC;" >  <span style="  border-bottom: 4px solid #46B3E6;"><?php _e('CSS Login Template Setting ') ?></span></h3>

<table class="form-table">
<tbody>

<tr valign="top">
<th scope="row">
<label for="wp_custom_loginbodybg_colorcss"><?php _e(' Dynamic Background  Color   ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[wp_custom_loginbodybg_colorcss]" id="wp_custom_loginbodybg_colorcss" value="<?php echo stripslashes($settings['wp_custom_loginbodybg_colorcss']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' Change your login backgroun color ') ?></p>
</td>
</tr>

</tbody>
</table>



<h3 style="border-bottom: 1px solid #CCCCCC;" >  <span style="  border-bottom: 4px solid #46B3E6;"><?php _e('Advanced Color Setting ') ?></span></h3>
<table class="form-table">
<tbody>


<tr valign="top">
<th scope="row">
<label for="advancedcolorsetting_raio_button"><?php _e('Active advance color settings') ?></label>
</th>
<td>

<?php foreach ($advancedcolorsetting_raio_button as $activate_advancedcolorsetting): ?>

<input type="radio" name="raju_wp_custom_log_options[advancedcolorsetting_raio_button]" id="<?php echo $activate_advancedcolorsetting['value'] ; ?>" value="<?php  esc_attr_e($activate_advancedcolorsetting['value']) ;?>" <?php  checked( $settings['advancedcolorsetting_raio_button'] , $activate_advancedcolorsetting['value']); ?> / >

<label for="<?php echo $activate_advancedcolorsetting['value'] ; ?>"><?php echo $activate_advancedcolorsetting['label'] ; ?></label><br/>
<?php endforeach ;?>

<p class="description"><?php _e('If you are planning to customize every color in logo, you can turn on of off setting here') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="loginareabgcolor13"><?php _e(' Login Area Background Color   ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[loginareabgcolor13]" id="loginareabgcolor13" value="<?php echo stripslashes($settings['loginareabgcolor13']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' you can change   your login area  backgroun color ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="loginformbgcolor1307"><?php _e(' Login Form Background Color   ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[loginformbgcolor1307]" id="loginformbgcolor1307" value="<?php echo stripslashes($settings['loginformbgcolor1307']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' you can change   your login Form  backgroun color ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="textcoloroffromarea"><?php _e(' Text Color of Form Area   ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[textcoloroffromarea]" id="textcoloroffromarea" value="<?php echo stripslashes($settings['textcoloroffromarea']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' you can change   Text Color of Form Area from here ') ?></p>

</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="texthovercolorofformarea"><?php _e(' Text Hover Color of Form Area ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[texthovercolorofformarea]" id="texthovercolorofformarea" value="<?php echo stripslashes($settings['texthovercolorofformarea']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' you can change   Text Hover Color of Form Area from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="submitbuttonbgcolor1307"><?php _e(' Submit Button Background Color ') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[submitbuttonbgcolor1307]" id="submitbuttonbgcolor1307" value="<?php echo stripslashes($settings['submitbuttonbgcolor1307']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' you can change   Submit Button Background Color from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="submitbuttonbuttonhoverbgcolor45"><?php _e(' Submit Button Hover Background Color') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[submitbuttonbuttonhoverbgcolor45]" id="submitbuttonbuttonhoverbgcolor45" value="<?php echo stripslashes($settings['submitbuttonbuttonhoverbgcolor45']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change   Submit Button Hover Background Color from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="textcolorofsubmitbutton45"><?php _e(' Text Color of Submit Button') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[textcolorofsubmitbutton45]" id="textcolorofsubmitbutton45" value="<?php echo stripslashes($settings['textcolorofsubmitbutton45']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change   Text Color of Submit Button from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="texthovercolorofsubmitbutotn89"><?php _e(' Text Hover Color of Submit Button') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[texthovercolorofsubmitbutotn89]" id="texthovercolorofsubmitbutotn89" value="<?php echo stripslashes($settings['texthovercolorofsubmitbutotn89']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change   Text Hover Color of Submit Buttonfrom here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="bgcolorofwarningmessage909"><?php _e(' 
Background Color of Warning Mesasage') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[bgcolorofwarningmessage909]" id="bgcolorofwarningmessage909" value="<?php echo stripslashes($settings['bgcolorofwarningmessage909']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change   
Background Color of Warning Mesasage from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="textcolorofwarningmessage6765"><?php _e(' Text Color of Warning Mesasage') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[textcolorofwarningmessage6765]" id="textcolorofwarningmessage6765" value="<?php echo stripslashes($settings['textcolorofwarningmessage6765']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change Text Color of Warning Mesasage from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="textcoloroflostpassword987"><?php _e(' Text Color of Lost Password') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[textcoloroflostpassword987]" id="textcoloroflostpassword987" value="<?php echo stripslashes($settings['textcoloroflostpassword987']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change Text Color of Lost Password from here ') ?></p>
</td>
</tr>

<tr valign="top">
<th scope="row">
<label for="linkhovercolor876"><?php _e(' Link Hover Color') ?></label>
</th>
<td>
<input type="text" name="raju_wp_custom_log_options[linkhovercolor876]" id="linkhovercolor876" value="<?php echo stripslashes($settings['linkhovercolor876']); ?>" class="my-color-field" data-default-color="#effeff" >
<p class="description"><?php _e(' You can change Link Hover Color from here ')?></p>
</td>
</tr>

</tbody>
</table>

<p class="submit"><input type="submit" value="<?php _e('Save Change') ?>" class="button button-primary" name="submit"></p>
</form>
</div>

</div>
<div class="clear"></div>
<?php }



?>