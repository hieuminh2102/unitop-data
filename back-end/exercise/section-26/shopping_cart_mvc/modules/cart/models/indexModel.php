<?php

use Symfony\Component\HttpFoundation\Session\Session;

function add_cart($id){
    global $list_product;
    //lấy thông tin sản phẩm thêm vào
    $item = get_product_by_id($id);
    // số lượng ban đầu của sản phẩm mặc định là 1
    $qty = 1;
    if(isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])){
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1 ;
    }
    //giỏ hàng chứa thông tin sản phẩm đã thêm
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],  // lấy thông tin get xuống cho vào trong giỏ hàng
        'url' => $item['url'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty
    );
    update_info_cart();
}

//Hàm cập nhật hóa đơn
function update_info_cart(){
    if(isset($_SESSION['cart'])){
        $num_order = 0;
        $total = 0;
        foreach($_SESSION['cart']['buy'] as $item){
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total,
        );
    }
}

function update_cart($qty){
    foreach($qty as $id => $new_qty){
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}

function get_product_by_id($id){
    $list_product = db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = $id");
    $list_product['url_add_cart'] = "?mod=cart&controller=index&action=add&id={$id}";
    $list_product['url'] = "?mod=product&controller=index&action=detail&id={$id}";
    return $list_product;
}

function get_list_buy_cart(){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']['buy'] as &$item){
            $item['url_delete_cart'] = "?mod=cart&controller=index&action=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

#Lấy số lượng đặt hàng trong giỏ hàng 
function get_num_order_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}

function get_total_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

function delete_cart($id){
    if(isset($_SESSION['cart']['buy'])){
        //xóa san phẩm có id trong giỏ hàng
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }else{
            unset($_SESSION['cart']);
        }
    }
}