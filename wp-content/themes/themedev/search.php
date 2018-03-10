<?php

get_header();
?>
<div class="content">
  <div id="main-content">
    <div class="search-info">
      <?php
       $_GET['dia_chi'];
       $arg = [ 'category_name' => 'nha-dat' ];
        $search_query = new WP_Query('s='.$s.'&showpost=-1');
        $search_key = wp_specialchars($s, 1);
        $search_count = $search_query->post_count;
        pre($search_count);
       ?>
    </div>
    <?php
    if( have_posts() ) : while( have_posts() ) : the_post();
      get_template_part('template-parts/post/content', get_post_format());
      endwhile;
      pagination();
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
