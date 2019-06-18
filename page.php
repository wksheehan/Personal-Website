<?php
  get_header();
  if(have_posts()):
    while(have_posts()) : the_post(); ?>
      <article class="page" id="section2">
        <div class="page-header">
          <h2>
            <?php the_title();?>
          </h2>
        </div>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <a class="scroll-arrow up" href="#section1">
          <span></span>
        </a>

      </article>
    <?php endwhile;
  else:
    echo '<p>No Content Found</p>';
  endif;
  get_footer();
    ?>
