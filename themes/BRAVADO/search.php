<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage BRAVADO MAG
 * @since BRAVADO MAG 1.0
 */
?>

<?php get_header(); ?>

<div class="wrapper">

  <div class="category-header"><image src="<?php echo get_site_url(); ?>/wp-content/themes/BRAVADO/images/RESULTS-header.png"/></div>

  <div class="articles">

<?php if ( have_posts() ) : ?>
 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                
<?php } ?>                            
 
<?php while ( have_posts() ) : the_post() ?>
 
 <div class="cat-article-block2">
       <a href="<?php the_permalink(); ?>"><?php $image = get_post_meta($post->ID, 'image', TRUE); ?>
       <?php if($image) { ?><img src="<?php echo $image; ?>" alt="Alt Text" /><?php } ?></a>
     <div class="cat-article-block2-text">
     <h3 class="cat-article-header2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
     <p class="cat-article-teaser2"><?php echo get_the_excerpt(); ?></p>
     </div>
     </div>
 
<?php endwhile; ?>
 
<div class="pagination"><?php pagination('«', '»'); ?></div>           
 
<?php else : ?>
 
                <div id="post-0" class="post no-results not-found">
                    <div class="entry-content">
                        <p class="sorry"><?php _e( 'SORRY, NOTHING MATCHED YOUR SEARCH. TRY AGAIN WITH SOME OTHER WORD[S].'); ?></p>
                    </div><!-- .entry-content -->
                </div>
 
<?php endif; ?>
  <!-- This closing div tag signifies the end of the Article Preview Container -->

</div>

  <!-- This closing div tag signifies the end of the Wrapper -->
</div>

<div id="footer">
<?php get_footer(); ?>