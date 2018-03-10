<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
  <div class="entry-thumbnail">
    <?php haiduy_thumbnail('large'); ?>
  </div>

  <div class="entry-header">
    <?php haiduy_entry_header(); ?>
    <?php haiduy_post_image_count(); ?>
    <?php echo $post->ID; ?>
  </div>

  <div class="entry-content">
    <?php haiduy_entry_content(); ?>
    <?php haiduy_entry_tag(); ?>
  </div>
</article>
