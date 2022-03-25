<?php
    $qty = $_POST['qty'];
    $id = $_POST['id'];
//lấy thông tin sản phẩm
    // $result = array(
    //     'qty' => $qty,
    //     'id' => $id
    // ); 
    // echo json_encode($result);
    $item = get_product_by_id($id);
    if(isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'] )){
        //cập nhật số lượng 
        $_SESSION['cart']['buy'][$id]['qty'] = $qty;
        //cập nhật tổng tiền
        $sub_total = $qty * $item['price'];
        $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
        //cập nhật toàn bộ giỏ hàng
        update_info_cart();
        //lấy tổng tiền từ giỏ hàng
        $total = get_total_cart();
        //tạo mảng giá trị trả về
        $result = array(
            'sub_total' => currency_format($sub_total),
            'total' => currency_format($total)
        );
        echo json_encode($result);
        // echo ($sub_total);
    }
