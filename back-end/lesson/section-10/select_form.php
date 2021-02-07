<?php
echo "<pre>";
print_r($_POST);
echo "<pre>";
if (isset($_POST['btn_order'])) {


    if (empty($_POST['pay'])) {
        echo "bạn cần chọn hình thức thanh toán";
    } else {
        $pay = $_POST['pay'];
        echo $pay;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form từ select optiom</title>
    </head>
    <body>
        <h1>Đặt hàng</h1>
        <form action="" method="POST">
            <label>Hình thức thanh toán</label><br>
            <select name="pay">
                <option value="">--chọn--</option>
                <option value="cod">Thanh toán tại nhà</option>
                <option value="banking">Thanh toán qua thẻ tín dụng</option>
            </select>
            <input type="submit" name="btn_order" value="Đặt hàng">
        </form>
    </body>
</html>



