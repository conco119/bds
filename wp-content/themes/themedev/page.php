<?php

get_header();
?>
<div class="content">
  <div id="main-content">
    <?php
    if( have_posts() ) : while( have_posts() ) : the_post();
      get_template_part('template-parts/post/content', get_post_format());
      get_template_part('author-bio');
      endwhile;
    else:
      get_template_part('template-parts/post/content', 'none');
    endif;
    ?>
  </div>
  <div id="side-bar">
    
  </div>
</div>
<?php
get_footer();
