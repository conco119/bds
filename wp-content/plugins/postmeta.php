<?php
/*
Plugin Name: Post Meta
Author: MacDuy
Description: Meta Data cho Bất động sản website
*/

function d_post_meta_box() {
    add_meta_box('bat-dong-san', 'Infomation', 'd_metabox_function', 'post');
}
add_action('add_meta_boxes', 'd_post_meta_box');

function d_metabox_function( $post ) {
 // Tạo trường địa chỉ
 $diachi = get_post_meta( $post->ID, '_dia_chi', true);
 $dientich = get_post_meta( $post->ID, '_dien_tich', true);
 $donvi = get_post_meta( $post->ID, '_don_vi', true);
 $gia = get_post_meta( $post->ID, '_gia', true);
 $donvitien = get_post_meta( $post->ID, '_don_vi_tien', true);
  echo '<label for="dia_chi_input" ><b> Địa chỉ </b></label>';
  echo "<input style='width:100%' id='dia_chi_input' type='text' name='dia_chi' value=" . "'" .  $diachi . "'" . ">";
  echo "<br>";
  echo "<br>";
  echo '<label for="dien_tich" ><b>Diện tích </b></label>';
  echo "</p>";
  echo "<input id='dia_chi_input' type='text' name='dien_tich' value=" . "'" .  $dientich . "'" . ">";

  if( $donvi == 'm')
    echo "<input type='radio' name='don_vi' value='m' checked> m<sup>2</sup>";
  else
    echo "<input type='radio' name='don_vi' value='m'> m<sup>2</sup>";

  if( $donvi == 'km')
    echo "<input type='radio' name='don_vi' value='km' checked/> km<sup>2</sup>";
  else
    echo "<input type='radio' name='don_vi' value='km'/> km<sup>2</sup>";

  echo '<br>';
  echo "<br>";
  echo '<label for="gia" ><b> Giá </b></label>';
  echo "<br>";
  printf("<input type='text' id='gia' name='gia' value='%1s'>", $gia);

  // echo $donvitien;
  echo "<select name='don_vi_tien'>";
    printf( "<option value='trm' %1s> Triệu/m2 </option>", check_tien($donvitien, 1) );
    printf( "<option value='trkm' %1s> Triệu/km2 </option>", check_tien($donvitien, 2));

    printf( "<option value='tm' %1s> Tỷ/m2 </option>", check_tien( $donvitien, 3));
    printf( "<option value='tk' %1s> Tỷ/km2 </option>", check_tien( $donvitien,4));
    printf( "<option value='' %1s> Không </option>", check_tien( $donvitien,5));
  echo "</select>";
  
}
function d_meta_data_save( $post_id ) {
 $diachi = sanitize_text_field($_POST['dia_chi']);
 $dientich = sanitize_text_field($_POST['dien_tich']);
 $donvi = sanitize_text_field($_POST['don_vi']);
 $gia = sanitize_text_field($_POST['gia']);
 $donvitien = sanitize_text_field($_POST['don_vi_tien']);
 update_post_meta( $post_id, '_dia_chi', $diachi);
 update_post_meta( $post_id, '_dien_tich', $dientich);
 update_post_meta( $post_id, '_don_vi', $donvi);
 update_post_meta( $post_id, '_gia', $gia);
 update_post_meta( $post_id, '_don_vi_tien', $donvitien);
}

add_action('save_post', 'd_meta_data_save');

function check_tien( $tien, $number) {
  if( $tien == 'trm' && $number == 1)
  return "selected";
if( $tien == 'trkm' && $number == 2 )
  return "selected";    
if( $tien == 'tm' && $number == 3 )
  return "selected";    
if( $tien == 'tkm' && $number == 4 )
  return "selected";    
if( $tien == '' && $number == 5 )
  return "selected";    
return "";
}