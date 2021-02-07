<?php
//Bài 4: Hiển thị danh sách bào viết lên giao diện
//Bài 3: Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
$list_product = array(
    1 => array(
        'id' => 1,
        'product_name' => '[Trả góp xe máy] - Xe Máy Honda Sonic 150 - Hàng Nhập Khẩu',
        'price' => '43.950.000 ₫',
        'img' => ''
    ),
    2 => array(
        'id' => 2,
        'product_name' => '[Trả góp xe máy 0%] - Xe máy Honda Air Blade (2021) 125cc - Phiên bản Đặc biệt',
        'price' => '43.950.000 ₫',
        'img' => ''
    )
);
echo "<pre>";
print_r($list_product);
echo "</pre>";


//Bài 2: Tạo mảng đa chiều quản lý các bài viết trong website tin tức
$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'giáo dục'
    ),
    2 => array(
        'cat_id' => 2,
        'cat_title' => 'văn hóa'
    )
);
$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => 'Cách ly 14 ngày toàn bộ chó, mèo ở khu vực xuất hiện chó dại',
        'img' => '',
        'post_desc' => '(Dân trí) - Phát hiện virus dại trong mẫu xét nghiệm lấy từ chó hoang tại ấp Lộc Chánh (xã Lộc Giang, huyện Đức Hòa, tỉnh Long An), cơ quan thú ý đã tiêm phòng vắc xin dại và cách ly 14 ngày để phòng dịch.',
        'cat_id' => '1',
    ),
    2 => array(
        'id' => 2,
        'post_title' => 'Rét đậm, rét hại: Đoán bệnh qua màu nước mũi của trẻ',
        'img' => '',
        'post_desc' => '(Dân trí) - Với hệ miễn dịch chưa hoàn thiện, trẻ nhỏ là mục tiêu tấn công hàng đầu của các mầm bệnh, đặc biệt là virus, vi khuẩn đường hô hấp.',
        'cat_id' => '2',
    )
);
echo "<pre>";
print_r($list_post);
echo "</pre>";
echo $list_post[2]['post_title'];

//Bài 1:Tạo mảng lưu các số lẻ từ 3 đến 150
//$list_odd = array();
//$n = 150;
//for ($i = 3; $i <= $n; $i += 2) {
//    $list_odd[] = $i;
//}
//
//echo "<pre>";
//print_r($list_odd);
//echo "</pre>";
//foreach ($list_odd as $item) {
//    echo $item;
//}
?>
<html>
    <head>
        <title>//Bài 4: Hiển thị danh sách bào viết lên giao diện</title>
    </head>
    <body>
        <style>
            .text-center{
                text-align: center;
            }
            .container{
                width: 960px;
                margin: 0px auto;
            }
            header, footer{
                background: blue;
                height: 30px;
            }
            a.post-title {
                display: block;
                width: 278px;
            }
            .list-post, .list-product{
                list-style: none;
            }
            ul.list-post li .post-title{
                display: block;
            }
            .box-body{
                display: flex;
            }
            .box-body .more-info{
                width: 472px;
            }
            a.post-thumb{
                display: block;
                width: 278px;
                box-sizing: border-box;
                padding-right: 15px;    
            }
            a.post-thumb img{
                max-width: 100%;
            }
            /*======= DAnh sách sản phẩm=======*/
            .product-item{
                width: 270px;
                border: 1px solid #333;                  
            }
            .price, .buy-now{
                text-align: center;
                display: block;
            }
        </style>
        <div id="wrapper">
            <header>
                <h2 class="text-center">Unitop.vn</h2>
            </header>
            <div id="content">
                <ul class="list-post">

                    <?php
                    if (!empty($list_post)) {
                        foreach ($list_post as $post) {
                            ?>
                            <li>
                                <div class="box-head">
                                    <a class="post-title"><?php echo $post['post_title']; ?></a>
                                </div>
                                <div class="box-body">
                                    <a class="post-thumb">
                                        <img src="image/pic-1.png">
                                    </a>
                                    <div class="more-info">
                                        <p class="short_description"><?php echo $post['post_desc']; ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <p> không tồn tại dữ liệu </p>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <footer>
                <p class="text-center">Học lập trình web đi làm</p>
            </footer>
        </div>
    </body>
    <h1>DAnh sách sản phẩm</h1>
    <div class="container">
        <ul class="list-product" >
            <?php
            foreach ($list_product as $product) {
                ?>
                <li>
                    <div class="product-item">
                        <a class="product-thumb"><img src="image/product1.jpg"></a>
                        <a class="product-name"><?php echo $product['product_name']; ?></a>
                        <div class="price"><?php echo $product['price']; ?></div>
                        <a class="buy-now">Mua ngay</a>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</html>