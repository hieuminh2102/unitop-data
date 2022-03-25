<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load('helper', 'format');
    load_model('index');
}

function indexAction()
{
    $list_buy = get_list_buy_cart();
    // show_array($list_buy);
    $data['list_buy'] = $list_buy;
    load_view('index', $data);
}

function updateAction()
{
    if (isset($_POST['btn_update_cart'])) { // <form action="?mod=cart&controller=index&action=update">
        show_array($_POST);
        update_cart($_POST['qty']);
        redirect("?mod=cart&controller=index&action=index");
    }
}

// function update_ajaxAction()
// {
//     $id = $_POST['id'];
//     $qty = $_POST['qty'];
//     $item = get_product_by_id($id);
//     // kiem tra xem san pham $id nay co trong gio hang chua
//     if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
//         // cập nhật số lượng của sản phẩm $id trong giỏ hàng
//         $_SESSION['cart']['buy']['$id']['qty'] = $qty;
//         //cập nhật tổng tiền của sản phẩm $id đó
//         $sub_total = $qty * $item['price'];
//         $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
//         //cập nhật toàn bộ giỏ hàng
//         update_info_cart();
//         //lấy tổng tiền từ giỏ hàng
//         $total = get_total_cart();
//         //tạo mảng giá trị trả về
//     //     $data = array(
//     //         'sub_total' => currency_format($sub_total),
//     //         'total' => currency_format($total)
//     //     );
//     //    echo json_encode($data);
//           echo $sub_total;
//     }
// }

function addAction()
{
    #lấy thông tin sản phẩm cần thêm vào giỏ hàng
    $id = (int)$_GET['id'];
    add_cart($id);
    redirect("?mod=cart&controller=index&action=index");
}

function deleteAction()
{
    $id = (int)$_GET['id'];
    delete_cart($id);
    redirect("?mod=cart&controller=index&act=index");
}

function delete_allAction()
{
    $id = (int)$_GET['id'];
    delete_cart($id);
    redirect("?mod=cart&controller=index&act=index");
}

function checkoutAction(){
    $data['list_buy'] = get_list_buy_cart();
    $data['total_cart'] = get_total_cart();
    $data['num_order'] = get_num_order_cart();
    load_view('checkout', $data);
}