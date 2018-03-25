<?php

get_header();
?>


  <section class="slider">

            </section>

            <section class="content">
              <div class="container">
               <div class="row">
                  <div class="col-sm-12 search-kinhnghiem">


       <div class='col-sm-12 form-search'>
             <div class='col-sm-12 form-kinhnghiem hvr-glow'>
          <div class='row category-kinhnghiem'>
             <span class='span-kinhnghiem'>TIN TỨC</span>
          </div>
          <div class='row content-kinhnghiem'>
          <?php $arg = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'tin-tuc', 'posts_per_page' => '4' ];  ?>
          <?php $kinh_nghiem = new WP_Query( $arg );  ?>
          <?php $kinh_nghiem->the_post(); ?>
                         <div class="col-sm-3 image-kinhnghiem">

                            <a href="<?php the_permalink(); ?>">
                            <!-- <img src="<?php //echo THEME_URL; ?>/img/thumbnail-post.jpg" class="img-responsive img-category" alt=""/> -->
                            <?php  the_post_thumbnail( 'post-thumbnail' ); ?>
                            </a>
                         </div>
                         <div class="col-sm-9 detail-kinhnghiem">

                         <div class="row title-detail-kinhnghiem">
                            <a href="<?php the_permalink(); ?>"><span class='span-bold-blue'> <?php the_title(); ?></span></a>
                         </div>
                         <div class="row content-detail-kinhnghiem">
                         <b> <?php the_excerpt(); ?> </b>
                         </div>


                <div class="row other-kinhnghiem">
                   <ul class="list-unstyled ">
                    <?php if( $kinh_nghiem->have_posts() ) : ?>
                    <?php while( $kinh_nghiem->have_posts() ) : ?>
                    <?php $kinh_nghiem->the_post(); ?>
                      <li class="link-other-kinhnghiem">
                         <a href="<?php the_permalink(); ?>" id="btn-news-categoty-top" class="" >
                         <span class="viewed-name"><?php the_title(); ?></span>
                         </a>
                      </li>
                  <?php endwhile; ?>
                  <?php endif; ?>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       </div>

       <!--End panel-->



    <div class='col-sm-12 kinhnghiem'>
       <div class='col-sm-12 form-kinhnghiem hvr-glow'>
          <div class='row category-kinhnghiem'>
             <span class='span-kinhnghiem'>KINH NGHIỆM</span>
          </div>
          <div class='row content-kinhnghiem'>
          <?php $arg = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'kinh-nghiem', 'posts_per_page' => '4' ];  ?>
          <?php $kinh_nghiem = new WP_Query( $arg );  ?>
          <?php //echo "<pre>"; ?>
          <?php //print_r($kinh_nghiem->the_post() ); ?>
          <?php //echo "</pre>"; ?>
          <?php $kinh_nghiem->the_post(); ?>
                         <div class="col-sm-3 image-kinhnghiem">

                            <a href="<?php the_permalink(); ?>">
                            <!-- <img src="<?php //echo THEME_URL; ?>/img/thumbnail-post.jpg" class="img-responsive img-category" alt=""/> -->
                            <?php  the_post_thumbnail( 'post-thumbnail' ); ?>
                            </a>
                         </div>
                         <div class="col-sm-9 detail-kinhnghiem">

                         <div class="row title-detail-kinhnghiem">
                            <a href="<?php the_permalink(); ?>"><span class='span-bold-blue'> <?php the_title(); ?></span></a>
                         </div>
                         <div class="row content-detail-kinhnghiem">
                         <b> <?php the_excerpt(); ?> </b>
                         </div>


                <div class="row other-kinhnghiem">
                   <ul class="list-unstyled ">
                    <?php if( $kinh_nghiem->have_posts() ) : ?>
                    <?php while( $kinh_nghiem->have_posts() ) : ?>
                    <?php $kinh_nghiem->the_post(); ?>
                      <li class="link-other-kinhnghiem">
                         <a href="<?php the_permalink(); ?>" id="btn-news-categoty-top" class="" >
                         <span class="viewed-name"><?php the_title(); ?></span>
                         </a>
                      </li>
                  <?php endwhile; ?>
                  <?php endif; ?>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--End panel-->


                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-9 main-content">
                     <!--project-->

    <?php
      $noibat_args = [
        'meta_query' => [
          ['key' => '_trang_thai', 'value' => 'noibat']
         ]
       ];
      $noibat = new WP_Query( $noibat_args );
      // pre($noibat);
      // echo $noibat->found_posts;
    ?>

    <div class="col-sm-12 batdongsannoibat" id="product_row">
       <div class='col-sm-12 category-batdongsannoibat'>
          <span class='span-batdongsannoibat'>BẤT ĐỘNG SẢN NỔI BẬT</span>
       </div>

       <?php if($noibat->have_posts()):
          while($noibat->have_posts()):
            $noibat->the_post();
       ?>
       <div class="col-sm-6 content-batdongsannoibat " id="id_product_item{{$i}}">
          <div class="col-sm-12 item-batdongsannoibat hvr-glow hvr-overline-from-center">
             <div class="col-sm-4 image-batdongsannoibat" id="id_image{{$i}}">
                <div class="row ">
                   <a href="<?php the_permalink(); ?> " id="ai{{$i}}">
                   <?php  the_post_thumbnail( 'post-thumbnail' ); ?>

                   </a>
                </div>
             </div>
             <div class="col-sm-8" id='title{{$i}}'>
                <div class="row title-batdongsannoibat">
                   <div class="col-sm-12 info">
                      <p id='p{{$i}}'><a href="<?php the_permalink() ?>"><span class='span-bold-red'><?php the_title(); ?></span></a></p>


                   </div>
                   <div class="col-sm-5 info">
                      <span class='span-bold'>DT:</span> <span><?php echo $post->_dien_tich; ?> <?php echo $post->_don_vi; ?><sup>2</sup></span>
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
        <!-- <div class="col-sm-6 content-batdongsannoibat " id="id_product_item{{$i}}">
          <div class="col-sm-12 item-batdongsannoibat hvr-glow hvr-overline-from-center">
             <div class="col-sm-4 image-batdongsannoibat" id="id_image{{$i}}">
                <div class="row ">
                   <a href="{{Asset($product['category_title'])}}/{{$product['name']}}-{{$product['id']}}" id="ai{{$i}}">
                   <img src="<?php //echo THEME_URL; ?>/img/thumbnail-post.jpg" class="img-responsive img-category-batdongsannoibat" alt="{{$product['name']}}"/>
                   </a>
                </div>
             </div>
             <div class="col-sm-8" id='title{{$i}}'>
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
       </div> -->

    </div>
    <!--End .row



    <?php
      $thuong_args = [
        'meta_query' => [
          ['key' => '_trang_thai', 'value' => 'thuong']
         ]
       ];
      $thuong = new WP_Query( $thuong_args );
      // pre($noibat);
      // echo $noibat->found_posts;
    ?>


                    <!-- bat dong san thuong (khac) -->
                     <div class="col-sm-12 batdongsanthuong" id="id_batdongsanthuong">
       <div class='col-sm-12 category-batdongsanthuong' id='id_category_batdongsanthuong'>
          <span class='span-batdongsanthuong' id="id_span_batdongsanthuong">BẤT ĐỘNG SẢN KHÁC</span>
       </div>
    <div class="form-batdongsanthuong" id ="id_form_batdongsanthuong">

    <?php if($thuong->have_posts()):
          while($thuong->have_posts()):
            $thuong->the_post();
       ?>

       <div class="col-sm-12 content-batdongsanthuong " id="id_content_batdongsanthuong{{$i}}">
          <div class="col-sm-12 item-batdongsanthuong hvr-glow hvr-box-shadow-inset hvr-overline-from-center" id="id_item_batdongsanthuong{{$i}}">

             <div class="col-sm-2 image-batdongsanthuong" id="id_image_batdongsanthuong{{$i}}">
                <div class="row" id="id_row{{$i}}">
                   <a href="<?php the_permalink(); ?>" id="ai{{$i}}">
                   <?php  the_post_thumbnail( 'post-thumbnail' ); ?>
                   </a>
                </div>
             </div>
             <div class="col-sm-10" id='id_detail_batdongsanthuong{{$i}}'>
                <div class="row title-batdongsanthuong" id='id_title_batdongsanthuong{{$i}}'>
                    <div class="col-sm-12 content-title-batdongsanthuong" id="id_content-title-batdongsanthuong{{$i}}">
                      <a  class="link" id= "id_link" href="<?php the_permalink(); ?>"><span class='span-bold-blue'>
                    <?php the_title(); ?></span></a>
                   </div>
                   <div class="col-sm-2 info">
                      <span class='span-bold'>DT:</span> <span id="id_area{{$i}}"><?php echo $post->_dien_tich.$post->_don_vi; ?><sup>2</sup></span>
                   </div>
                   <div class="col-sm-2 info">
                   <span class='span-bold'>Giá:</span>
                         <span class='span-bold-red'>
                         <?php echo $post->_gia. " " .convert($post->_don_vi_tien); ?>
                      </span>
                   </div>
                   <div class="col-sm-3 info">
                      <span class='span-bold'>
                      <?php echo $post->_dia_chi; ?>

                       </span>
                   </div>
                    <div class="col-sm-2 info3">
                   <span class='span-small-font '><?php echo get_the_date('d-m-Y', $post->ID); ?></span>
                   </div>
                </div>
             </div>
          </div>
       </div>
          <?php endwhile;
              endif;
          ?>
       <!--end .product-item-->
    </div>

    </div>

    <!--End .row-->






                  <!-- du an noi bat -->

                  <?php
      $duan = [
        'meta_query' => [
          ['key' => '_trang_thai', 'value' => 'duan']
         ]
       ];
      $duan = new WP_Query( $duan );
      // pre($noibat);
      // echo $noibat->found_posts;
    ?>


                <?php if($duan->have_posts()):
          while($duan->have_posts()):
            $duan->the_post();
       ?>

    <div class="col-sm-12 duannoibat" id="product_row">
       <div class='col-sm-12 category-duannoibat'>
          <span class='span-duannoibat'>DỰ ÁN NỔI BẬT</span>
       </div>
       <div class="col-sm-4 content-duannoibat " id="id_product_item{{$i}}">
          <div class="col-sm-12 item-duannoibat hvr-glow hvr-overline-from-center">
             <div class=" image-duannoibat ">
                <a href="<?php the_permalink(); ?>" id="ai{{$i}}">
                <?php  the_post_thumbnail( 'post-thumbnail' ); ?>
                </a>
             </div>
             <div class="info">
                <p id='p{{$i}}'><a href="<?php the_permalink(); ?>"><span class='span-bold-red'><?php the_title(); ?></span></a></p>
             </div>
             <div class="info">
                <span class='span-bold'>
                <?php echo get_post_meta($post->ID, '_dia_chi', true); ?>
                </span>
             </div>
          </div>
       </div>
          <?php endwhile; ?>
          <?php endif; ?>
       <!--end .product-item-->

       <!-- <div class="col-sm-4 content-duannoibat " id="id_product_item{{$i}}">
          <div class="col-sm-12 item-duannoibat hvr-glow hvr-overline-from-center">
             <div class=" image-duannoibat ">
                <a href="{{Asset($product['category_title'])}}/{{$product['city_title']}}/{{$product['name']}}-{{$product['id']}}" id="ai{{$i}}">
                <img src="<?php //echo THEME_URL; ?>/img/thumbnail-post.jpg" class="img-responsive img-category-duannoibat" alt="{{$product['name']}}"/>
                </a>
             </div>
             <div class="info">
                <p id='p{{$i}}'><a href="{{Asset($product['category_title'])}}/{{$product['city_title']}}/{{$product['name']}}-{{$product['id']}}"><span class='span-bold-red'>Dự án căn hộ chung cư Lexington Residence - Quận 2</span></a></p>
             </div>
             <div class="info">
                <span class='span-bold'>
                Đức Hoà, Long An
                </span>
             </div>
          </div>
       </div> -->
       <!--end .product-item-->
    </div>
    <!--End .row-->



                  </div>
                  <!--End .main-content-->
                  <div class="col-sm-3 side-bar">
                    <!-- quang cao -->

                    <div class="row quangcao ">


                 <a href="/"><img src="<?php echo THEME_URL; ?>/img/dat-nha-be-quang-cao.png" alt="" class="img-responsive img-quangcao" /></a>
            </div>

            <?php $tintucnoibat_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'tin-tuc', 'posts_per_page' => '10' ];  ?>
            <?php
              $tintucnoibat = new WP_Query( $tintucnoibat_args );
              // echo $tintucnoibat->found_posts;
            ?>

                    <!-- tin tuc noi bat -->
                     <div class="row category-panel">
    <div class="panel panel-danger">
    <div class="panel-heading">
    <h3 class="panel-title">TIN TỨC</h3>
    </div>
     <ul class="link-panel">
     <?php if($tintucnoibat->have_posts()):
          while($tintucnoibat->have_posts()):
            $tintucnoibat->the_post();
       ?>
             <li>
                <a href="<?php the_permalink(); ?>" id="news-dot" class="news-dot" >
                <span class="news-dot-title"><?php the_title(); ?></span>
                </a>

             </li>

       <?php endwhile; endif; ?>

             <!-- <li>
                <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
                <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
                </a>

             </li> -->

          </ul>
    </div>
    </div>


                    <!-- bat dong san xem nhieu nhat -->
                  <!--   <div class="row category-panel-batdongsanxemnhieunhat">
    <div class="panel panel-danger">
    <div class="panel-heading">
    <h3 class="panel-title">NHÀ ĐẤT XEM NHIỀU NHẤT</h3>
    </div>
     <ul class="link-panel">
            <li>
                <a href="{{Asset('bat-dong-san/ban-dat-nha-be-161')}}" id="news-dot" class="news-dot" >
                <span class="news-dot-title">Bán Đất Nhà Bè</span>
                </a>
             </li>
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
    </div> -->
<!--
                     @include('template.quangcaovnexpress')
                     @include('template.flagcounter')
                     @include('template.quangcaomicrosoft')
                     @include('template.quangcaobosuutap')
                     <p>Đéo cần quảng cáo</p> -->
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
?>


