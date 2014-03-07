<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage BRAVADO MAGAZINE
 * @since BRAVADO MAGAZINE 1.0
 */

get_header(); ?>

		<div class="wrapper">
			<div id="article-container" role="main">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #article-container -->
		</div><!-- .wrapper -->

<?php get_footer(); ?>
