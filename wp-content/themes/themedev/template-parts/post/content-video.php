<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
  <div class="entry-header">
    <p>post-format video</p>
    <?php haiduy_entry_header(); ?>
    <?php haiduy_post_image_count(); ?>
  </div>

  <div class="entry-content">
    <?php the_content(); ?>
    <?php haiduy_entry_tag(); ?>
  </div>
</article>
