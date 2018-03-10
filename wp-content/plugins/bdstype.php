<?php
/*
Plugin Name: Nha Dat Type
Author: MacDuy
Description: Meta Data cho loại nhà đất
*/

function d_nha_dat_metabox() {
    add_meta_box('nha-dat-metabox', 'Phân loại nhà đất', 'd_nha_dat_function', 'post');
}
add_action('add_meta_boxes', 'd_nha_dat_metabox');

function d_nha_dat_function( $post ) {
    $trangthai = get_post_meta( $post->ID, '_trang_thai', true);

    printf("<input type='radio' name='trang_thai' id='thuong' value='thuong' %1s >  ", check_trang_thai($trangthai, 1));
    echo "<label for='thuong'>" . "Bất động sản thường" . "</label> ";
    
    echo "<br>";
    printf("<input type='radio' name='trang_thai' id='noi_bat' value='noibat' %1s >", check_trang_thai( $trangthai, 2 ));
    echo "<label for='noi_bat'>" . "Bất động sản nổi bật" . "</label> ";
    echo "<br>";

    printf("<input type='radio' name='trang_thai' id='du_an' value='duan' %1s> ", check_trang_thai($trangthai, 3) );
    echo "<label for='du_an'>" . "Dự án nổi bật" . "</label> ";
}

function d_meta_save( $post_id ) {
    $trangthai = sanitize_text_field($_POST['trang_thai']);
    update_post_meta( $post_id, '_trang_thai', $trangthai);
}
add_action('save_post', 'd_meta_save');
function check_trang_thai( $trangthai, $number ) {
    if( $trangthai == 'thuong' && $number == 1)
        return "checked";
    if( $trangthai == 'noibat' && $number == 2 )
        return "checked";    
    if( $trangthai == 'duan' && $number == 3 )
        return "checked";    
    return "";
}