<?php
/*
  Template Name: Tin Tức
*/

?>

<?php

get_header();
?>
<?php $tin_tuc_args = [ 'orderby' => 'date', 'order' => 'DESC', 'category_name' => 'tin-tuc', 'posts_per_page' => '20' ];  ?>
<?php
              $tin_tuc = new WP_Query( $tin_tuc_args );
              // echo "a";
              // echo $tin_tuc->found_posts;
              // the_post();
                          ?>
<section class="content">
         <div class="container">
      <div class="row">


      <div class="col-sm-9 news-block">
        <div class="page-first">
           <div   class="arrowLine1 "><span class="title-page-first"></span></div>

    <div class="hvr-wobble-horizontal">
           <!-- <div   class="arrowLine">
           <a href="{{Asset('tintuc')}}"><span class="title-page-first">Tin Tức</span></a>
           </div> -->
           <div class="triangle_left"></div>
         </div>

         <div class="hvr-wobble-horizontal">
           <div class="triangle_left1"></div>

           <div class="arrowLine2"><a href="{{Asset('tintuc')}}/{{$data_category->title}}"><span class="title-page-current">Tin tức</span></a></div>

      <!--      <div class="arrowLine"><a href="{{Asset('tintuc')}}/{{$data_category->title}}"><span class="title-page-current">{{$data_category->name}}</span></a></div>
           @endif -->
           <div class="triangle_left"></div>
         </div>

 </div>

      <div class="row">
         <?php if($tin_tuc->have_posts()):
          while($tin_tuc->have_posts()):
            $tin_tuc->the_post();
       ?>
        <div class="col-sm-8 news-hot">
         <div class="image-hot" id="id_image">
            <a href="<?php the_permalink(); ?>" id="ai">
               <?php the_post_thumbnail('thumbnail'); ?>
            </a>
         </div>
         <div class="news-hot-title">
            <a href="<?php the_permalink() ?>" id="ai">
              <h4 class="hot-title"><?php the_title(); ?></h4>
            </a>
         </div>
         <div>
           <b>
             <?php the_excerpt(); ?>
           </b>
         </div>
          </div><!--End .col-sm-8-->
          <?php break; ?>
        <?php endwhile; ?>
        <?php endif; ?>

          <div class="col-sm-4 most-viewed-link">
              <ul class="list-unstyled ">
                 <?php if($tin_tuc->have_posts()):
                    while($tin_tuc->have_posts()):
                      $tin_tuc->the_post();
                 ?>
                <li class="viewed-link">
                  <a href="<?php the_permalink(); ?>" id="btn-news-categoty-top" class="" >
                  <span class="viewed-name"><?php the_title(); ?></span>
                  </a>
                </li>

                  <?php
                    if($tin_tuc->current_post >= 5)
                      break;
                    ?>

                <?php endwhile; ?>
                <?php endif; ?>

            <!--     <li class="viewed-link">
                  <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="btn-news-categoty-top" class="" >
                  <span class="viewed-name">5 lời khuyên vàng để đầu tư bất động sản thành công</span>
                  </a>
                </li>

                 <li class="viewed-link">
                  <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="btn-news-categoty-top" class="" >
                  <span class="viewed-name">5 lời khuyên vàng để đầu tư bất động sản thành công</span>
                  </a>
                </li>

                 <li class="viewed-link">
                  <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="btn-news-categoty-top" class="" >
                  <span class="viewed-name">5 lời khuyên vàng để đầu tư bất động sản thành công</span>
                  </a>
                </li>

                 <li class="viewed-link">
                  <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="btn-news-categoty-top" class="" >
                  <span class="viewed-name">5 lời khuyên vàng để đầu tư bất động sản thành công</span>
                  </a>
                </li>
 -->

              </ul>
          </div><!--End .most-viewed-link-->
         </div><!--End .row-->
         <div class="row line"></div>
         <div class="col-sm-7 news-nomal-list">
            <?php
                  if($tin_tuc->have_posts()):
                    while($tin_tuc->have_posts()):
                      $tin_tuc->the_post();
             ?>
             <div class="row news-nomal">
               <div>
                    <a  href="<?php the_permalink() ?>">
                    <h4><?php the_title() ?></h4>
                    </a>
                </div>
                  <div class="col-sm-5 image" id="id_image">
                     <a href="<?php the_permalink() ?>" id="ai">
                     <!-- <img src="img/2024408177-kinh-nghiem-thue-van-phong.jpg" class="img-responsive img-news-nomal" alt=""/> -->
                     <?php the_post_thumbnail('thumbnail',['class' => 'img-responsive img-news-nomal']) ?>
                     </a>
                  </div>
                  <div class="col-sm-7 content_summary">
                    <?php the_excerpt() ?>
                  </div>
              </div><!--End .news-nomal-->

                <?php endwhile; ?>
                <?php endif; ?>

             <!--  <div class="row news-nomal">
               <div>
                    <a  href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}">
                    <h4>KINH NGHIỆM THUÊ: Kinh nghiệm chọn thuê văn phòng hạng trung</h4>
                    </a>
                </div>
                  <div class="col-sm-5 image" id="id_image">
                     <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="ai">
                     <img src="img/2024408177-kinh-nghiem-thue-van-phong.jpg" class="img-responsive img-news-nomal" alt=""/>
                     </a>
                  </div>
                  <div class="col-sm-7 content_summary">
                    Làm thế nào để thuê được một văn phòng hạng trung vừa có giá cả, vị trí phù hợp với nhu cầu của mình lại vừa đáp ứng được các yếu tố dịch vụ khác trong thời buổi kinh tế hiện nay?
                  </div>
              </div> <End .news-nomal-->

      </div><!--Enf .news-nomal-list-->
       <div class="col-sm-5 news-categoty-list">

          <div class="row">
            <div class="row news-categoty">
               <ul class="list-unstyled news-categoty-top">
                     <li>
                        <a href="{{Asset('nha-dat')}}" id="btn-news-categoty-top" class="btn btn-news-categoty-top btn-no-radius" >
                        <span class="name-news-categoty">Rao vặt</span>
                        </a>
                     </li>
              </ul>
            </div>
            <div class="row news-dot-list">
                <ul class="">

                     <li>
                        <a href="{{Asset($product->category_title)}}/chitiet/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Đất Khu Dân Cư Long Thới Đường Nguyễn Văn Tạo 140 M2 Giá 10 Triệu/m2</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{Asset($product->category_title)}}/chitiet/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Đất Khu Dân Cư Long Thới Đường Nguyễn Văn Tạo 140 M2 Giá 10 Triệu/m2</span>
                        </a>
                     </li>

                    <li>
                        <a href="{{Asset($product->category_title)}}/chitiet/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Đất Khu Dân Cư Long Thới Đường Nguyễn Văn Tạo 140 M2 Giá 10 Triệu/m2</span>
                        </a>
                     </li>
                </ul>
            </div><!--End .news-dot-list-->
          </div><!--End .row .Rao vat-->

         <div class="row">
            <div class="row news-categoty">
               <ul class="list-unstyled news-categoty-top">
                     <li>
                        <a href="{{Asset('tintuc')}}/{{$categorytitle}}" id="btn-news-categoty-top" class="btn btn-news-categoty-top btn-no-radius" >
                        <span class="name-news-categoty">The gioi</span>
                        </a>
                     </li>
                <!--    @foreach($category as $key1 => $items)
                    @if($key1=='item')
                    @foreach($items as $item)
                    <li>
                        <a href="{{Asset('tintuc')}}/{{$categoryname}}/{{$item['title']}}" id="btn-news-categoty" class="btn btn-news-categoty btn-no-radius" data-toggle="modal" data-target="#loginModal">
                        <span class="title-news-categoty">{{$item['name']}}</span>
                        </a>
                     </li>
                    @endforeach
                    @endif
                    @endforeach
                    -->
                  </ul>
            </div>

            <div class="row news-content">
               <div>
                 <a href="{{Asset('tintuc')}}/{{$item->category_title}}/{{$item->name}}-{{$item->id}}" title="">
                   <h4>Sinh viên Harvard nói về áp lực và những thú vị của trường</h4>
                 </a>
               </div>
                  <div class="col-sm-5 " id="id_image">
                     <a href="{{Asset('tintuc')}}/{{$item->category_title}}/{{$item->name}}-{{$item->id}}" id="ai">
                     <img src="img/1216446098-sinh-vien-Harvard.jpg" class="img-responsive image-dot" alt=""/>
                     </a>
                  </div>
                  <div class="col-sm-7">
                    <b>
                      'Ở Harvard, sinh viên sẽ được đưa cho một chiếc phao và bạn sẽ phải tự học bơi hoặc chết chìm', Tôn Hà Anh sinh viên năm cuối ngành Kinh tế Đại học Harvard chia sẻ.
                    </b>
                  </div>
            </div> <!--End .news-content-->

            <div class="row news-dot-list">
                <ul class="">

                     <li>
                        <a href="{{Asset('tintuc')}}/{{$item->category_title}}/{{$item->name}}-{{$item->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Điều gì đã làm nên huyền thoại kinh tế Hàn Quốc?</span>
                        </a>
                     </li>

                      <li>
                        <a href="{{Asset('tintuc')}}/{{$item->category_title}}/{{$item->name}}-{{$item->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Những thiên tài và người nổi tiếng ngủ bao nhiêu giờ mỗi ngày?</span>
                        </a>
                     </li>

                        <li>
                        <a href="{{Asset('tintuc')}}/{{$item->category_title}}/{{$item->name}}-{{$item->id}}" id="news-dot" class="news-dot" >
                        <span class="news-dot-title">Điều gì đã làm nên huyền thoại kinh tế Hàn Quốc?</span>
                        </a>
                     </li>

                </ul>
            </div><!--End .news-dot-list-->
         </div><!--End .row-->

         </div><!--End .News-category-list-->
      </div><!--End .news-list-->
      <!--End .main-content-->
      <div class="col-sm-3 side-bar">
        <!-- //template quang cao fulland -->
        <div class="row quangcao ">


     <a href="/"><img src="<?php echo THEME_URL; ?>/img/dat-nha-be-quang-cao.png" alt="" class="img-responsive img-quangcao" /></a>
</div>

    <!-- het quang cao -->
        <!-- search sidebar -->

 <div class="row category-panel-batdongsanxemnhieunhat">
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">Kinh nghiệm</h3>
</div>
 <div class="panel-body custom-body">
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
<!--
          <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li> -->

      </ul>
</div>
</div>
<!--End panel-body
</div>
</div>
 -->

          <!-- tin tuc noi bat -->
<!--          <div class="row category-panel">
<div class="panel panel-danger">
<div class="panel-heading">
<h3 class="panel-title">TIN TỨC</h3>
</div>
 <ul class="link-panel">
           <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li>
          <li>
            <a href="{{Asset('tintuc')}}/{{$product->category_title}}/{{$product->name}}-{{$product->id}}" id="news-dot" class="news-dot" >
            <span class="news-dot-title">Kỳ vọng gì sau lời 'Nói và Làm' của Thủ tướng với cộng đồng DN?</span>
            </a>

         </li>
      </ul>
</div>
</div>
 -->



         <!-- @include('template.batdongsanxemnhieunhat')
         @include('template.quangcaovnexpress')
         @include('template.flagcounter') -->

      </div>
      <!--End .side-bar-->
   </div>
   <!--End .row-->
</div>
</div>
<!--End .container-->
      </section>
      <!-- jQuery -->

<?php
get_footer();
