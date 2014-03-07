<?php /* Template Name: Category
*/ ?>

<?php get_header(); ?>

<div id="slides_wrapper">
  <div class="home-logo-fullwidth">
    <div class="home-logo"></div>
    </div>
<div id="slides">
<div class="slides_container">
<div>
<img src="wp-content/themes/BRAVADO/images/1.png">
</div>
<div>
<img src="wp-content/themes/BRAVADO/images/2.png">
</div>
<div>
<img src="wp-content/themes/BRAVADO/images/3.png">
</div>
<div>
<img src="wp-content/themes/BRAVADO/images/4.png">
</div>
</div>
</div>
</div>

<div class="nav-fullwidth">
  <div class="nav-container">
    <div class="nav-col1">
      <div class="toc-article-block">
      <p class="toc-category">FASHION</p>
      <?php
        $catposts = get_posts('numberposts=1&category=4');
        foreach($catposts as $post) :
     ?>
      <p class="toc-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="feature-teaser"><?php the_excerpt(); ?></p>
     <?php endforeach; ?></p>
      </div>
      <div class="toc-article-block">
      <p class="toc-category">MUSIC</p>
      <?php
        $catposts = get_posts('numberposts=1&category=5');
        foreach($catposts as $post) :
     ?>
      <p class="toc-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="feature-teaser"><?php the_excerpt(); ?></p>
     <?php endforeach; ?></p>
      </div>
      <div class="toc-category-col1">
        <p class="toc-category-small">FASHION</p>
        <ul class="cat-lists">
        		<?php
              $catposts = get_posts('numberposts=8&category=4');
              foreach($catposts as $post) :
           ?>
           <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endforeach; ?>
        	</ul>
      </div>
      <div class="toc-category-col2">
        <p class="toc-category-small">ART</p>
        <ul class="cat-lists">
        		<?php
              $catposts = get_posts('numberposts=8&category=3');
              foreach($catposts as $post) :
           ?>
           <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endforeach; ?>
        	</ul>
      </div>
    </div>
    <div class="nav-col2">
      <div class="toc-article-block">
      <p class="toc-category">ART</p>
      <?php
        $catposts = get_posts('numberposts=1&category=3');
        foreach($catposts as $post) :
     ?>
      <p class="toc-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
     <?php endforeach; ?></p>
      </div>
      <div class="toc-article-block">
      <p class="toc-category">CULTURE</p>
      <?php
        $catposts = get_posts('numberposts=1&category=6');
        foreach($catposts as $post) :
     ?>
      <p class="toc-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
     <?php endforeach; ?></p>
      </div>
      <div class="toc-category-col1">
       <p class="toc-category-small">MUSIC</p>
       <ul class="cat-lists">
       		<?php
             $catposts = get_posts('numberposts=8&category=5');
             foreach($catposts as $post) :
          ?>
          <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endforeach; ?>
       	</ul>
      </div>
      <div class="toc-category-col2">
        <p class="toc-category-small">CULTURE</p>
        <ul class="cat-lists">
        		<?php
              $catposts = get_posts('numberposts=8&category=6');
              foreach($catposts as $post) :
           ?>
           <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endforeach; ?>
        	</ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>