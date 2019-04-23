<?php

//Change the Login Logo URL

function my_login_logo_url() {
return 'http://www.example.com' ;
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Wordpress Custom Login Theme';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


//Hide the Login Error Message	



//Remove the Login Page Shake

function my_login_head() {
remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');


//Change the Redirect URL

function admin_login_redirect( $redirect_to, $request, $user )
{
global $user;
if( isset( $user->roles ) && is_array( $user->roles ) ) {
if( in_array( "administrator", $user->roles ) ) {
return $redirect_to;
} else {
return home_url();
}
}
else
{
return $redirect_to;
}
}
add_filter("login_redirect", "admin_login_redirect", 10, 3);

?>