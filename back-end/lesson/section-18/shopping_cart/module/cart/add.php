<?php
    // B1 Lấy được thông tin cần thêm vào giỏ hàng
    $id = (int)$_GET['id'];
    add_cart($id);
    redirect("?mod=cart&act=show");
    show_array($_SESSION['cart']);
?>