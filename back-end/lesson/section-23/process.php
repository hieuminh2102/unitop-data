<?php
    //Tính toán
    $num_order = $_POST['num_order'];
    $price = $_POST['price'];
    $total = $price * $num_order;

    $result = array(
        'num_order' => $num_order,
        'price' => $price,
        'total' => $total
    );
    echo json_encode($result);
    // echo $total;

?>