<?php
/*
  Template Name: Dự Án
*/

?>

<?php

get_header();
?>

 <section class="slider">

        </section>

        <section class="content">
          <div class="container">
           <div class="row">

           </div>
           <div class="row">
              <div class="col-sm-9 main-content">
                 <!--project-->


<div class="col-sm-12 batdongsannoibat" id="product_row">
   <div class='col-sm-12 category-batdongsannoibat'>
      <span class='span-batdongsannoibat'>DỰ ÁN</span>
   </div>
      <?php
      $duan_args = [
        'meta_query' => [
          ['key' => '_trang_thai', 'value' => 'duan']
         ],
         'posts_per_page' => '15'

       ];
      $duan = new WP_Query( $duan_args );
      // pre($duan);
      // echo $duan->found_posts;
    ?>
       <?php //$noi_bat_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'tin-tuc', 'posts_per_page' => '4' ];  ?>
        <?php //$kinh_nghiem = new WP_Query( $noi_bat_args );  ?>
          <?php if($duan->have_posts()):
          while($duan->have_posts()):
            $duan->the_post();
       ?>
   <div class="col-sm-12 content-batdongsannoibat " id="id_product_item{{$i}}">
      <div class="col-sm-12 item-batdongsannoibat hvr-glow hvr-overline-from-center">
         <div class="col-sm-2 image-batdongsannoibat" id="id_image{{$i}}">
            <div class="row ">
               <a href="<?php the_permalink() ?>" id="ai{{$i}}">
               <?php  the_post_thumbnail( 'post-thumbnail' ); ?>
               </a>
            </div>
         </div>
         <div class="col-sm-10" id='title{{$i}}'>
            <div class="row title-batdongsannoibat">
               <div class="col-sm-12 info">
                  <p id='p{{$i}}'><a href="<?php the_permalink() ?>"><span class='span-bold-red'><?php the_title() ?></span></a></p>


               </div>
               <div class="col-sm-5 info">
                  <span class='span-bold'>DT:</span> <span>1<?php echo $post->_dien_tich; ?> <?php echo $post->_don_vi; ?><sup>2</sup></span>
               </div>
               <div class="col-sm-7 info">
               <span class='span-bold'>Giá:</span>
                     <span class='span-bold-red'>
               <?php echo $post->_gia. " " .convert($post->_don_vi_tien); ?>
                  </span>
               </div>
               <div class="col-sm-12 info">
                  <span class='span-bold'>
                  <?php echo $post->_dia_chi; ?>
                   </span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end .product-item-->
    <?php endwhile;
          endif;
          ?>

    <!-- <div class="col-sm-12 content-batdongsannoibat " id="id_product_item{{$i}}">
      <div class="col-sm-12 item-batdongsannoibat hvr-glow hvr-overline-from-center">
         <div class="col-sm-2 image-batdongsannoibat" id="id_image{{$i}}">
            <div class="row ">
               <a href="{{Asset($product['category_title'])}}/{{$product['name']}}-{{$product['id']}}" id="ai{{$i}}">
               <img src="img/thumbnail-post.jpg" class="img-responsive img-category-batdongsannoibat" alt="{{$product['name']}}"/>
               </a>
            </div>
         </div>
         <div class="col-sm-10" id='title{{$i}}'>
            <div class="row title-batdongsannoibat">
               <div class="col-sm-12 info">
                  <p id='p{{$i}}'><a href="{{Asset($product['category_title'])}}/{{$product['name']}}-{{$product['id']}}"><span class='span-bold-red'>ĐẤT THỔ VƯỜN GẦN TRƯỜNG QUỐC TẾ MỸ AIS, CẢNG HIỆP PHƯỚC, ĐƯỜNG CAO TỐC BLLT</span></a></p>


               </div>
               <div class="col-sm-5 info">
                  <span class='span-bold'>DT:</span> <span>140.00m<sup>2</sup></span>
               </div>
               <div class="col-sm-7 info">
               <span class='span-bold'>Giá:</span>
                     <span class='span-bold-red'>
                10.00 triệu/m2
                  </span>
               </div>
               <div class="col-sm-12 info">
                  <span class='span-bold'>
                  Nhà Bè, TP Hồ Chí Minh
                   </span>
               </div>
            </div>
         </div>
      </div>
   </div>
 -->
</div>
<!--End .row-->














              </div>
              <!--End .main-content-->
              <div class="col-sm-3 side-bar">
                <!-- quang cao -->

                <div class="row quangcao ">


             <a href="/"><img src="<?php echo THEME_URL ?>/img/dat-nha-be-quang-cao.png" alt="" class="img-responsive img-quangcao" /></a>
        </div>


                <!-- tin tuc noi bat -->
                 <div class="row category-panel">
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">DỰ ÁN</h3>
</div>
 <ul class="link-panel">
        <?php
      $du_an_args = [
        'meta_query' => [
          ['key' => '_trang_thai', 'value' => 'duan']
         ],
         'posts_per_page' => '10'

       ];
      $duan = new WP_Query( $du_an_args );
      // pre($duan);
      // echo $duan->found_posts;
    ?>
       <?php //$noi_bat_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'tin-tuc', 'posts_per_page' => '4' ];  ?>
        <?php //$kinh_nghiem = new WP_Query( $noi_bat_args );  ?>
          <?php if($duan->have_posts()):
          while($duan->have_posts()):
            $duan->the_post();
       ?>
         <li>
            <a href="<?php the_permalink() ?>" id="news-dot" class="news-dot" >
            <span class="news-dot-title"><?php the_title() ?></span>
            </a>

         </li>
       <?php endwhile; ?>
     <?php endif; ?>
         <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
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
<h3 class="panel-title">KINH NGHIỆM</h3>
</div>
 <ul class="link-panel">
  <?php $kinh_nghiem_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'kinh-nghiem', 'posts_per_page' => '10' ];  ?>
          <?php $kinh_nghiem = new WP_Query( $kinh_nghiem_args );  ?>
           <?php if( $kinh_nghiem->have_posts() ) : ?>
                    <?php while( $kinh_nghiem->have_posts() ) : ?>
                    <?php $kinh_nghiem->the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" id="news-dot" class="news-dot" >
            <span class="news-dot-title"><?php the_title() ?></span>
            </a>
         </li>
           <?php endwhile; ?>
            <?php endif; ?>

      </ul>
</div>
</div>

                 <!-- @include('template.quangcaovnexpress')
                 @include('template.flagcounter') -->
                 <div class="row quangcao-news ">


     <a href="http://vnexpress.net"><img src="<?php echo THEME_URL ?>/img/quangcaomicrosoft.gif" alt="vnexpress" class="img-responsive img-quangcao-news" /></a>
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
             <a class="" id="btn-news-categoty-top" href="http://localhost/~mtd/bdsoff/nha-dat-noi-bat/">
             <span class="viewed-name">Bất động sản nổi bật</span>
             </a>


          </div>

          <div class="col-sm-2 link-batdongsantinhtp ">
              <a class="" id="btn-news-categoty-top" href="http://localhost/~mtd/bdsoff/nha-dat-khac/">
             <span class="viewed-name">Bất động sản khác</span>
             </a>


          </div>

          <div class="col-sm-2 link-batdongsantinhtp ">
               <a class="" id="btn-news-categoty-top" href="http://localhost/~mtd/bdsoff/du-an/">
             <span class="viewed-name">Dự án</span>
             </a>


          </div>

   </div>
        </div>
        </section>



<?php
get_footer();
