<?php

function get_info_cat($cat_id){
    $list_product_cat = db_fetch_row("SELECT * FROM `tbl_product_cat` WHERE `id` = $cat_id");
    $list_product_cat['url'] = "?mod=product&controller=index&action=index&cat_id={$cat_id}";
    return $list_product_cat;
}

function get_list_product_by_cat_id($cat_id){
    $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = $cat_id");
    $list_item = array();
    foreach($list_product as $item){
        if($item['cat_id'] == $cat_id){
            $item['url'] = "?mod=product&controller=index&action=detail&id={$item['id']}";
            $list_item[] = $item;
        }
    }
    return $list_item;
}

function get_product_by_id($id){
    $list_product = db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = $id");
    $list_product['url_add_cart'] = "?mod=cart&controller=index&action=add&id={$id}";
    return $list_product;
}

#Lấy số lượng đặt hàng trong giỏ hàng 
function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}