<?php
/*
Plugin Name: Dashboard Google Page Rank
Plugin URI: http://wordpress.org/extend/plugins/dashboard-google-pagerank/
Description: Shows your google pagerank in the wordpress dashboard
Author: Weston Deboer
Version: 1.1
Author URI: http://westondeboer.com
*/
function gpr_wp_dashboard_test() {
include('pagerank.php');
$url = get_bloginfo('url');

echo $url.' has a Page Rank of '.$pr_rank;
echo getpagerank($url );

}
function gpr_wp_dashboard_setup() {
	wp_add_dashboard_widget( 'gpr_wp_dashboard_test', __( 'Google Page Rank' ),'gpr_wp_dashboard_test');
}
add_action('wp_dashboard_setup', 'gpr_wp_dashboard_setup');

?>