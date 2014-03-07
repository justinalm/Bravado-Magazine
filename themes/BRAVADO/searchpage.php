<?php 
/* 
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="wrapper">

  <div class="category-header"><image src="wp-content/themes/BRAVADO/images/FASHION-header.png"/></div>

  <div class="articles">




<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>





  <!-- This closing div tag signifies the end of the Article Preview Container -->

</div>

  <!-- This closing div tag signifies the end of the Wrapper -->
</div>

<div id="footer">
<?php get_footer(); ?>
</div>