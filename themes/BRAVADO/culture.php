<?php /* Template Name: Culture
*/ ?>

<?php get_header(); ?>
  
<div class="wrapper">

  <h2 class="category-header"><image src="<?php echo get_site_url(); ?>/wp-content/themes/BRAVADO/images/CULTURE-header.png"/ alt="Category of CULTURE Header Image"></h2>

  <div class="articles">
 
<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=5&cat=6'.'&paged='.$paged);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

 
   <!-- This closing div tag signifies the end of the Article Preview Container -->

</div>

  <!-- This closing div tag signifies the end of the Wrapper -->

</div>
<?php get_footer(); ?>