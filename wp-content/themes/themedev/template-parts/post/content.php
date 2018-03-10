<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
  <div class="entry-thumbnail">
    <?php haiduy_thumbnail('thumbnail'); ?>
  </div>

  <div class="entry-header">
    <?php haiduy_entry_header(); ?>
    <?php haiduy_entry_meta(); ?>
  </div>

  <div class="entry-content">
    <?php haiduy_entry_content(); ?>
    <?php haiduy_entry_tag(); ?>
  </div>
</article>
