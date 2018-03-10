<?php

get_header();
?>



<section class="content">
          <div class="container">
           <div class="row">

           </div>
           <div class="row">
              <div class="col-sm-9 main-content">
                 <!--project-->


<div class="col-sm-12 batdongsannoibat" id="product_row">
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
<!--End .row-->














              </div>
              <!--End .main-content-->
              <div class="col-sm-3 side-bar">
                <!-- quang cao -->

                <div class="row quangcao ">


             <a href="/"><img src="<?php echo THEME_URL; ?>/img/dat-nha-be-quang-cao.png" alt="" class="img-responsive img-quangcao" /></a>
        </div>


                <!-- tin tuc noi bat -->
                 <div class="row category-panel">
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Nhà đất khác</h3>
</div>
 <ul class="link-panel">
          <?php $nha_dat_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'nha-dat', 'posts_per_page' => '10' ];  ?>
<?php
              $nha_dat = new WP_Query( $nha_dat_args ); ?>
   <?php

                  if($nha_dat->have_posts()):
                    while($nha_dat->have_posts()):
                      $nha_dat->the_post();
             ?>
         <li>
            <a href="<?php the_permalink() ?>" id="news-dot" class="news-dot" >
            <span class="news-dot-title"><?php the_title(); ?></span>
            </a>

         </li>
       <?php endwhile; ?>
     <?php endif; ?>
         <li>
            <a href="<?php the_permalink() ?>" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li>

      </ul>
</div>
</div>


                <!-- bat dong san xem nhieu nhat -->
                <div class="row category-panel-batdongsanxemnhieunhat">
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Kinh nghiệm</h3>
</div>
 <ul class="link-panel">
  <?php $kinh_nghiem_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'kinh-nghiem', 'posts_per_page' => '7' ];  ?>
<?php
              $kinh_nghiem = new WP_Query( $kinh_nghiem_args ); ?>
   <?php

                  if($kinh_nghiem->have_posts()):
                    while($kinh_nghiem->have_posts()):
                      $kinh_nghiem->the_post();
             ?>
        <li>
            <a href="<?php the_permalink() ?>" id="news-dot" class="news-dot" >
            <span class="news-dot-title"><?php the_title() ?></span>
            </a>
         </li>
           <?php endwhile; ?>
        <?php endif; ?>
           <li>
            <a href="{{Asset('bat-dong-san/ban-dat-binh-chanh-162')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Bình Chánh</span>
            </a>
         </li>
         <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-long-thoi-huyen-nha-be-gia-re-3')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Long Thới Huyện Nhà Bè</span>
            </a>

         </li>
         <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-nguyen-van-tao-huyen-nha-be-2')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Nguyễn Văn Tạo Huyện Nhà Bè</span>
            </a>

         </li>
         <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-nguyen-binh-huyen-nha-be-gia-re-4')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Nguyễn Bình Huyện Nhà Bè</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('bat-dong-san/ban-dat-nguyen-van-tao-xa-long-thoi-46')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Mặt Tiền Xã Long Thới Tại Nhà Bè</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('bat-dong-san/ban-dat-le-van-luong-huyen-nha-be-gia-re-1')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Lê Văn Lương Huyện Nhà Bè</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-huynh-tat-phat-huyen-nha-be-gia-re-159')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Đào Sư Tích Huyện Nhà Bè</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-dao-su-tich-huyen-nha-be-gia-re-160')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Huỳnh Tấn Phát Huyện Nhà Bè</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('bat-dong-san/ban-dat-duong-phan-van-bay-huyen-nha-be-gia-re-158')}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Bán Đất Đường Phan Văn Bảy Huyện Nhà Bè</span>
            </a>

         </li>
      </ul>
</div>
</div>

                 <!-- @include('template.quangcaovnexpress')
                 @include('template.flagcounter') -->
                 <div class="row quangcao-news ">


     <a href="http://vnexpress.net"><img src="<?php echo THEME_URL; ?>/img/quangcaomicrosoft.gif" alt="vnexpress" class="img-responsive img-quangcao-news" /></a>
</div>


                 <!-- @include('template.quangcaobosuutap')
                 <h1>Vai ca dai</h1> -->
              </div>
              <!--End .side-bar-->
           </div>
           <!--End .row-->
           <!-- bat dong san tinh thanh pho -->
           <div class="row batdongsantinhtp ">

      <div class="col-sm-2 link-batdongsantinhtp ">
         <a class="" id="btn-news-categoty-top" href="{{Asset('bat-dong-san')}}{{'/'}}{{$city['title']}}">
         <span class="viewed-name">Bất Động Sản Hồ Chí Minh</span>
         </a>
      </div>

   </div>
        </div>
        </section>


<!-- <div class="content">
  <div id="main-content"> -->
    <?php
    // if( have_posts() ) : while( have_posts() ) : the_post();
    //   get_template_part('template-parts/post/content', get_post_format());
    //   get_template_part('author-bio');
    //   endwhile;
    // else:
    //   get_template_part('template-parts/post/content', 'none');
    // endif;
    ?>
  <!-- </div>
  <div id="side-bar">

  </div>
</div> -->
<?php
get_footer();
