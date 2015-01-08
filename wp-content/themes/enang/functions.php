<?php
defined('ABSPATH') or die("No script kiddies please!");
add_theme_support( 'post-thumbnails' );

//custom image size
add_image_size( 'featured-slide-img', 658, 311, true );
//add_image_size('featured-slide-img', 658, 311, true);
add_image_size( 'featured-slide-img', 9999, 311, false );


//get background image
function get_bg_image($postID)
{
    if ( has_post_thumbnail() ){
        $image_link = wp_get_attachment_url(get_post_thumbnail_id($postID));
    }
    else 
    {
        $image_link = "/enang/wp-content/themes/enang/images/img_default.jpg";
    }
    return $image_link;
}
function get_cate_name($postID){
    $category = get_the_category( $postID );
    $slug = $category[0]->slug;
    switch($slug){
        case 'doc-bao':
            $result = '<div class=" hidden-xs slide_cat_name slide_doc_bao">'.$category[0]->name.'</div>';
            break;
        case 'tam-su':
            $result = '<div class=" hidden-xs slide_cat_name slide_tam_su">'.$category[0]->name.'</div>';
            break;
        case 'lam-dep':
            $result = '<div class=" hidden-xs slide_cat_name slide_lam_dep">'.$category[0]->name.'</div>';
            break;
        case 'me-va-be':
            $result = '<div class=" hidden-xs slide_cat_name slide_lam_me">'.$category[0]->name.'</div>';
            break;
        case 'kinh-nghiem-hay':
            $result = '<div class=" hidden-xs slide_cat_name slide_kinh_nghiem">'.$category[0]->name.'</div>';
            break;
        case 'nha-cua':
            $result = '<div class=" hidden-xs slide_cat_name slide_nha_cua">'.$category[0]->name.'</div>';
            break;
        case 'thu-gian':
            $result = '<div class=" hidden-xs slide_cat_name slide_thu_gian">'.$category[0]->name.'</div>';
            break;
        default:
            break;
    }
    return $result;
    
}
//get category name of related post item list
function get_cate_name_re($postID){
    $category = get_the_category( $postID );
    $slug = $category[0]->slug;
    switch($slug){
        case 'doc-bao':
            $result = '<p class="other-cat-name slide_doc_bao">'.$category[0]->name.'</p>';
            break;
        case 'tam-su':
            $result = '<p class="other-cat-name slide_tam_su">'.$category[0]->name.'</p>';
            break;
        case 'lam-dep':
            $result = '<p class="other-cat-name slide_lam_dep">'.$category[0]->name.'</p>';
            break;
        case 'me-va-be':
            $result = '<p class="other-cat-name slide_lam_me">'.$category[0]->name.'</p>';
            break;
        case 'kinh-nghiem-hay':
            $result = '<p class="other-cat-name slide_kinh_nghiem">'.$category[0]->name.'</p>';
            break;
        case 'nha-cua':
            $result = '<p class="other-cat-name slide_nha_cua">'.$category[0]->name.'</p>';
            break;
        case 'thu-gian':
            $result = '<p class="other-cat-name slide_thu_gian">'.$category[0]->name.'</p>';
            break;
        default:
            break;
    }
    return $result;
    
}
//get Vietnamese date time
function sw_get_current_weekday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = date("l");
    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Th? hai';
            break;
        case 'tuesday':
            $weekday = 'Th? ba';
            break;
        case 'wednesday':
            $weekday = 'Th? tu';
            break;
        case 'thursday':
            $weekday = 'Th? nam';
            break;
        case 'friday':
            $weekday = 'Th? sáu';
            break;
        case 'saturday':
            $weekday = 'Th? b?y';
            break;
        default:
            $weekday = 'Ch? nh?t';
            break;
    }
    return $weekday.', '.date('d/m/Y | H:i');
}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

