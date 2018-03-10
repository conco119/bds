<?php
/**

@Các hằng giá trị
 @  THEME_URL = đường dẫn thư mục theme
 @  CORE = đường dẫn thư mục core
**/
define( 'THEME_URL', get_stylesheet_directory_uri() );
define( 'THEME_DIR', get_stylesheet_directory() );
define( 'CORE', THEME_DIR . '/core' );
/**
@nhung file init
**/
require_once(CORE . '/init.php');
/**
@color
**/
define('BG_COLOR', ['default-color' => 'red']);
/**
@chieu rong noi dung
**/
if( !isset($content_width) )
  $content_width = 620;
/**
@ chuc nang cua theme
**/
if( !function_exists('theme_setup') ) {
  function theme_setup() {
    // thiet lap text domain
    $language_folder = THEME_DIR . '/languages';
    load_theme_textdomain('textdomain_haiduy', $language_folder);
  }
  add_action('init', 'theme_setup');
}


if( !function_exists('theme_support') ) {
  function theme_support() {
    //them link rss len head
    add_theme_support( 'automatic-feed-links' );
    // theme post thumbnail
    add_theme_support( 'post-thumbnails' );
    // format cho post
    add_theme_support( 'post-formats',['aside', 'gallery', 'image', 'quote', 'video', 'nhadat'] );
    //them title
    add_theme_support( 'title-tag' );
    //thay doi background
    add_theme_support( 'custom-background', BG_COLOR);
    //theme menu
    register_nav_menu( 'primary-menu', __('Primary Menu', 'textdomain_haiduy') );
    // tao sidebar
    $sidebar = [
      'name'         => __('Main sidebar', 'textdomain_haiduy'),
      'id'           => 'main-sidebar',
      'description'  => __('Sidebar mặc định', 'textdomain_haiduy'),
      'class'        => 'main-sidebar',
      'before_title' => '<h3> class="widget_title" ',
      'after_title'  => '</h3>'
    ];
    register_sidebar($sidebar);

  }
  add_action('after_setup_theme', 'theme_support');
}

if( !function_exists('menu_setup') ) {
  function menu_setup( $menu ) {
    $menu = [
      'theme_location'  => $menu,
      'container'       => 'nav',
      'container_class' => $menu
    ];
    wp_nav_menu( $menu );
  }
}
/**
@ham tao phan trang
**/
if( !function_exists('pagination') ) {
  function pagination() {
    if($GLOBALS['wp_query']->max_num_pages < 2)
      return '';
   ?>
  <nav class='pagination' role='pagination'>

    <?php if( get_next_posts_link() ): ?>
      <div class="prev">
        <?php next_posts_link( __("Older Posts", 'textdomain_haiduy') ); ?>
      </div>
    <?php endif; ?>

    <?php if( get_previous_posts_link() ): ?>
      <div class="next">
        <?php previous_posts_link( __("Newest Posts", 'textdomain_haiduy') ); ?>
      </div>
    <?php endif; ?>

  </nav>

  <?php }
}
?>


<?php

/**
@ham hien thi thumbnail
*/

if( !function_exists('haiduy_thumbnail')) {
  function haiduy_thumbnail($size) {
    if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
    <figure class="post-thumbnail">
      <?php the_post_thumbnail( $size ) ?>
    </figure>
  <?php endif; ?>

  <?php }
}
//@hien thi tieu de post
if( !function_exists('haiduy_entry_header')) {
  function haiduy_entry_header() { ?>
    <?php if( is_single() ): ?>
      <h1 class='entry-title'><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <?php else: ?>
      <h2 class='entry-title'><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
   <?php }
}
// @hien thi thong tin post
if( !function_exists('haiduy_entry_meta')) {
  function haiduy_entry_meta() { ?>
    <?php if( !is_page() ): ?>
      <div class="entry-meta">
        <?php printf( __("<span class='author'> Posted by %1s ", 'textdomain_haiduy'), get_the_author() ); ?>
        <?php printf( __("<span class='date-published'> At by %1s ", 'textdomain_haiduy'), get_the_date() ); ?>
        <?php printf( __("<span class='category'> in %1s ", 'textdomain_haiduy'), get_the_category_list(',') ); ?>
        <?php if( comments_open() ): ?>
          <span class='meta-reply'>
            <?php comments_popup_link(
              __("Để lại bình luận", 'textdomain_haiduy'),
              __("1 Comment", 'textdomain_haiduy'),
              __("% Comments", 'textdomain_haiduy'),
              __("Read all comments", 'textdomain_haiduy')
              ); ?>
          </span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
   <?php }
}
//@ hien thi noi dung post

if( !function_exists('haiduy_entry_content') ) {
  function haiduy_entry_content() { ?>
    <?php if( !is_single() && !is_page() ): ?>
      <?php the_excerpt(); ?>
    <?php else: ?>
      <?php
      the_content();
      $link_page = [
        'before'           => __("<p>Page: ", 'textdomain_haiduy'),
        'after'            => "</p>",
        'nextpagelink'     => __("Next Page", 'textdomain_haiduy'),
        'previouspagelink' => __("Previous Page", 'textdomain_haiduy')
      ];
      wp_link_pages( $link_page );
      ?>

    <?php endif; ?>
  <?php
  }
}
//@thay doi readmore mac dinh
function haiduy_readmore() {
  return "<a class='read-more' href='" . get_permalink( get_the_ID() ) . "'>" . __("Đọc thêm...", 'textdomain_haiduy') . "</a>" ;
}

add_filter('excerpt_more', 'haiduy_readmore');

//@ hien thi entry tag
if( !function_exists('haiduy_entry-tag')) {
  function haiduy_entry_tag() { ?>
    <?php if( is_single() ): ?>
      <?php if( has_tag() ): ?>
        <div class='entry-tag'>
          <?php printf( __("Tagged in  1%s", 'textdomain_haiduy'), get_the_tag_list( ',' )); ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  <?php
  }
}

//@ dem so hinh anh trong post

if( !function_exists('haiduy_post_image_count')) {
  function haiduy_post_image_count() {
    // echo get_the_ID();
    $attachment = get_children([ 'post_parent' => get_the_ID() ]);
    $attachment_number = count( $attachment );
    printf( __("This image contains %1s photos", 'textdomain_haiduy'), $attachment_number);
  }
}

//@debug bien
if( !function_exists('pre')) {
  function pre($var) {
    echo "<pre>";
    print_r($var);
    echo "<pre>";
  }
}

//@ nhung file style.css

if( !function_exists('haiduystyle')) {
  function haiduystyle() {
    // 1 param ten cua style
    // style chinh cua theme
    wp_register_style( 'main-style', THEME_URL . '/style.css', 'all' );
    wp_enqueue_style( 'main-style' );

    // bootstrap css
    wp_register_style( 'bootstrap', THEME_URL . '/css/bootstrap.min.css', 'all' );
    wp_enqueue_style( 'bootstrap' );

    //hover css
    wp_register_style( 'hover', THEME_URL . '/css/hover.css', 'all' );
    wp_enqueue_style( 'hover' );

    //bootstrap social
    wp_register_style( 'bootstrap-social', THEME_URL . '/css/bootstrap-social.css', 'all' );
    wp_enqueue_style( 'bootstrap-social' );

    //font awesome
    wp_register_style( 'font-awesome', THEME_URL . '/css/font-awesome.css', 'all' );
    wp_enqueue_style( 'font-awesome' );

    //style bds
    wp_register_style( 'stylebds', THEME_URL . '/css/stylebds.css', 'all' );
    wp_enqueue_style( 'stylebds' );

    //tintuc css
    wp_register_style( 'tintuc', THEME_URL . '/css/tintuc.css', 'all' );
    wp_enqueue_style( 'tintuc' );

    //jquery ui css
    wp_register_style( 'jqueryui', THEME_URL . '/css/jquery-ui.css', 'all' );
    wp_enqueue_style( 'jqueryui' );

    //datepicker
    wp_register_style( 'datepicker', THEME_URL . '/css/datepicker.css', 'all' );
    wp_enqueue_style( 'datepicker' );

    //leaflet
    wp_register_style( 'leaflet', THEME_URL . '/css/leaflet.css', 'all' );
    wp_enqueue_style( 'leaflet' );
    // --------------script--------------------------------------------------

    //jquery
    wp_register_script( 'jquery203', THEME_URL . '/js/jquery-2.0.3.min.js', 'all' );
    wp_enqueue_script( 'jquery203' );

    //boostrap js
    wp_register_script( 'bootstrap', THEME_URL . '/js/bootstrap.min.js', 'all' );
    wp_enqueue_script( 'bootstrap' );

    //moment js
    wp_register_script( 'moment', THEME_URL . '/js/moment.js', 'all' );
    wp_enqueue_script( 'moment' );

    //jquery-form
    wp_register_script( 'jqueryform', THEME_URL . '/js/jquery-form.js', 'all' );
    wp_enqueue_script( 'jqueryform' );

    //jquery-ui
    wp_register_script( 'jqueryui', THEME_URL . '/js/jquery.ui.js', 'all' );
    wp_enqueue_script( 'jqueryui' );

    //main
    wp_register_script( 'main', THEME_URL . '/js/main.js', 'all' );
    wp_enqueue_script( 'main' );

    //jquery validate
    wp_register_script( 'jqueryvalidate', THEME_URL . '/js/jquery.validate.js', 'all' );
    wp_enqueue_script( 'jqueryvalidate' );

    //boostrap datepicker
    wp_register_script( 'bsdatepicker', THEME_URL . '/js/bootstrap-datepicker.js', 'all' );
    wp_enqueue_script( 'bsdatepicker' );
    //tiny mce
    wp_register_script( 'tinymce', THEME_URL . '/js/tiny_mce.js', 'all' );
    wp_enqueue_script( 'tinymce' );
  }
}
add_action( 'wp_enqueue_scripts', 'haiduystyle' );


function convert( $money ) {
  switch( $money) {
    case "trm":
      return "triệu/m<sup>2</sup>";
    case "trkm":
      return "triệu/km<sup>2</sup>";
    case "tm":
      return "tỷ/m<sup>2</sup>";
    case "tkm":
      return "tỷ/km<sup>2</sup>";
    default:
      return '';
  }
}
