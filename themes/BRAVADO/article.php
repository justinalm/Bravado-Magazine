<?php
/*
Template Name Posts: BRAVADO ARTICLE
*/
?>

<?php get_header(); ?>
  
<div class="wrapper">

  <div id="article-container">

  <div id="art-feature-img">
    <?php 
    // use this example wherever you have access to $post->ID, e.g. the WordPress loop
    if(function_exists('wp_get_post_image'))
        echo wp_get_post_image('width=795&css=alignright&parent_id='.$post->ID);  
    ?>
    </div>

  <div id="article-header-box">
    <h2 class="headline"><data:title/><?php the_title(); ?></h2>
    <div id="header-box-butt"></div>
  </div>

<?php the_post(); ?>
<?php the_content(); ?>

  </div>

</div>

<div id="social">

<!-- Twitter like button -->
<div id="twitter">
  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
   <a href="http://twitter.com/share" class="twitter-share-button"
      data-url="<?php the_permalink(); ?>"
      data-via="BRAVADO MAGAZINE"
      data-text="<?php the_title(); ?>"
      data-count="horizontal">Tweet</a>
</div>
<!-- end of Twitter like button -->

<!-- Facebook like button -->
<div id="facebook">
  
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;layout=standard&amp;show-faces=true&amp;width=530&amp;height=60&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:530px; height:60px"></iframe>

</div>
<!-- end of facebook like -->

</div>

  <!-- This closing div tag signifies the end of the Wrapper -->
</div>
</div>

<div id="footer">
<?php get_footer(); ?>
</div>