<?php

/*
Author:       Jakub Chrobot
Author URI:   https://jakubchrobot.pl
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/


// check that user is logged or no
if ( !is_user_logged_in() ){

// single-page price hide
function woocommerce_template_single_price(){
	return;
}

// archive add_to_cart hide
function woocommerce_template_loop_add_to_cart(){
	return;
}

// archive price hide
function woocommerce_template_loop_price(){
	return;
}

// single add_to_cart hide
function woocommerce_template_single_add_to_cart(){
	return;
}

// single excerpt hide
function woocommerce_template_single_excerpt(){

    // info for no-logged users 
	echo '<div style="padding: 2rem 0rem; font-weight: 700;"> You must login to see price</div>';


}

}
