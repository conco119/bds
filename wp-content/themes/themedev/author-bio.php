<div class="entry-footer">
  <div class="author-box">
    <div class="author-avatar">
      <?php get_avatar( get_the_author_meta("ID") ); ?>
    </div>
      <h3><?php printf( __("Posted by <a href='%1s'>%2s</a>", 'textdomain_haiduy'),get_author_posts_url(get_the_author_meta('ID')),
        get_the_author()
       ); ?></h3>
       <p>
         <?php echo get_the_author_meta( 'description' ); ?>
       </p>
       <!-- <p>Trang tác giả</p> -->
  </div>
</div>
