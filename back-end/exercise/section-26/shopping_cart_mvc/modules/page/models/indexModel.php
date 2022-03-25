<?php

function get_page_by_id($id){
    $list_pages = db_fetch_row("SELECT * FROM `tbl_pages` WHERE `id` = $id");
    return $list_pages;
}

#Lấy số lượng đặt hàng trong giỏ hàng 
function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}
