<?php
if (isset($_POST['btn_reg'])) {
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";



    //kiểm tra mảng cat có dữ liệu hay ko
    if (isset($_POST['cat'])) {
        echo "<pre>";
        print_r($_POST['cat']);
        echo "<pre>";
        
        #cách xử lý 1
        foreach ($_POST['cat'] as $item) {
            echo $item . "<br>";
        }
        #cách xử lý 2
        $list_cat = implode(',', $_POST['cat']);
        echo $list_cat;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form từ list checkbox</title>
    </head>
    <body>
        <h1>Chọn danh mục</h1>
        <form action="" method="POST">
            <input type="checkbox" name="cat[]" value="1" id="cat_1">
            <label for="cat_1">Thể thao</label>
            <input type="checkbox" name="cat[]" value="2" id="cat_2">
            <label for="cat_2">Xã hội</label>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>
