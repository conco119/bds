<?php

get_header();
?>
<div class="content">
  <div id="main-content">
    <div class="archive-title">
      <h1>that la vai</h1>
      <?php
      if ( is_tag() ):
        printf( __('Posts tagged: %s', 'textdomain_haiduy'), single_tag_title('', false) );
      elseif ( is_category() ):
        printf( __('Posts categorized: %s', 'textdomain_haiduy'), single_cat_title('', false) );
      elseif ( is_day() ):
       printf( __('Dayly archive: 1%s', 'textdomain_haiduy'), get_the_time('l, F, j, Y') );
      elseif ( is_month() ):
       printf( __('Monthly archive: 1%s', 'textdomain_haiduy'), get_the_time('F, Y') );
      elseif ( is_year() ):
       printf( __('Yearly archive: 1%s', 'textdomain_haiduy'), get_the_time('Y') );
      endif;
      ?>
    </div>
    <?php if( is_tag() || is_category( )): ?>
      <div class="archive-description">
        <?php echo term_description(); ?>
      </div>
    <?php endif; ?>

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
?>
