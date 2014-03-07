<div class="nav-fullwidth">
  <div class="nav-container">
    <div class="nav-col1">
      
      <div class="toc-category-col1">
        <a href="index.php?page_id=126"><h2 class="toc-category-small">FASHION</p></a>
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
        <a href="index.php?page_id=129"><h2 class="toc-category-small">ART</p></a>
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
      
      <div class="toc-category-col1">
       <a href="index.php?page_id=131"><h2 class="toc-category-small">MUSIC</p></a>
       <ul class="cat-lists">
       		<?php
             $catposts = get_posts('numberposts=4&category=5');
             foreach($catposts as $post) :
          ?>
          <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endforeach; ?>
       	</ul>
      </div>
      <div class="toc-category-col2">
        <a href="index.php?page_id=133"><h2 class="toc-category-small">CULTURE</p></a>
        <ul class="cat-lists">
        		<?php
              $catposts = get_posts('numberposts=4&category=6');
              foreach($catposts as $post) :
           ?>
           <li id="small-art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endforeach; ?>
        	</ul>
      </div>
    </div>
    <p class="copyright-footer">All content copyright BRAVADO MAGAZINE. 2011.</p>
  </div>
</div>