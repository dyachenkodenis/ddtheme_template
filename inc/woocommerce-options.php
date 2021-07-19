<?php if (!defined('ABSPATH')) { die(); }
/**
* Wordpress Theme
* @version     1.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
* @package WordPress
* @subpackage Wordpress Theme
* @since Wordpress Theme 1.0
*/

//My Account
//////////////////////////////

//remove menu item///////////////////
/*add_filter ( 'woocommerce_account_menu_items', 'remove_my_account_links' );
function remove_my_account_links( $menu_links ){
	
	//unset( $menu_links['edit-address'] ); // Addresses	
	//unset( $menu_links['dashboard'] ); // Remove Dashboard
	//unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	//unset( $menu_links['orders'] ); // Remove Orders
	//unset( $menu_links['downloads'] ); // Disable Downloads
	//unset( $menu_links['edit-account'] ); // Remove Account details tab
	//unset( $menu_links['customer-logout'] ); // Remove Logout link
	
	return $menu_links;	
}*/

//rename menu item////////////////////////
/*add_filter ( 'woocommerce_account_menu_items', 'rename_my_account_links' );
function rename_my_account_links( $menu_links ){
	
	// $menu_links['TAB ID HERE'] = 'NEW TAB NAME HERE';
	$menu_links['downloads'] = 'My Files';

	return $menu_links;
}*/


//add item one method//////////////////////
/*add_filter ( 'woocommerce_account_menu_items', 'one_more_link' );
function one_more_link( $menu_links ){

	// we will hook "anyuniquetext123" later
	//$new = array( 'anyuniquetext123' => 'Gift for you' );

	// or in case you need 2 links
	$new = array( 'link1' => 'Link 1', 'link2' => 'Link 2' );

	// array_slice() is good when you want to add an element between the other ones
	$menu_links = array_slice( $menu_links, 0, 1, true ) 
	+ $new 
	+ array_slice( $menu_links, 1, NULL, true );


	return $menu_links; 
}*/

/*add_filter( 'woocommerce_get_endpoint_url', 'hook_endpoint', 10, 4 );
function hook_endpoint( $url, $endpoint, $value, $permalink ){
 
	if( $endpoint === 'anyuniquetext123' ) {
 
		// ok, here is the place for your custom URL, it could be external
		$url = 'site_url()';
 
	}
	return $url;
 
}*/

/*
body.woocommerce-account ul li.woocommerce-MyAccount-navigation-link--anyuniquetext123 a:before{
	content: "\f1fd"
}
*/


//add item two method//////////////////////
/*
 * Step 1. Add Link (Tab) to My Account menu
 */
/*add_filter ( 'woocommerce_account_menu_items', 'misha_log_history_link', 40 );
function misha_log_history_link( $menu_links ){
	
	$menu_links = array_slice( $menu_links, 0, 5, true ) 
	+ array( 'log-history' => 'Log history' )
	+ array_slice( $menu_links, 5, NULL, true );
	
	return $menu_links;

}*/
/*
 * Step 2. Register Permalink Endpoint
 */
/*add_action( 'init', 'misha_add_endpoint' );
function misha_add_endpoint() {

	// WP_Rewrite is my Achilles' heel, so please do not ask me for detailed explanation
	add_rewrite_endpoint( 'log-history', EP_PAGES );

}*/
/*
 * Step 3. Content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
 */
/*add_action( 'woocommerce_account_log-history_endpoint', 'misha_my_account_endpoint_content' );
function misha_my_account_endpoint_content() {

	// of course you can print dynamic content here, one of the most useful functions here is get_current_user_id()
	echo 'Last time you logged in: yesterday from Safari.';

}*/
/*
 * Step 4
 */
// Go to Settings > Permalinks and just push "Save Changes" button.

/*
body.woocommerce-account ul li.woocommerce-MyAccount-navigation-link--log-history a:before{
	content: "\f1da";
}

*/

//////after and before
/*
add_action('woocommerce_before_account_navigation', 'misha_some_content_before');
function misha_some_content_before(){
	echo 'blah blah blah before';
}

add_action('woocommerce_after_account_navigation', 'misha_some_content_after');
function misha_some_content_after(){
	?>
	<p>blah blah blah after</p>
	<?php
}

*/