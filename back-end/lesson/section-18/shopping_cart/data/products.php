<?php
# Danh mục (laptop, dien thoai, may tinh bang)
/* 
 id => id
 Tên danh mục => cat_title
*/
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại'
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Macbook'
    ),
    3 => array(
        'id' => 3,
        'cat_title' => 'MÁy tính bảng'
    )
);

# Dữ liệu sản phẩm
/**
 * id => id
 * tên sản phẩm => product_title
 * giá => price
 * mã sản phẩm => code
 * mô tả => product_desc
 * ảnh đại diện => product_thumb
 * nội dung => product_content
 * id danh mục => cat_id
 */

 $list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Samsung Galaxy S21 5G',
        'price' => 17990000,
        'code' => 'UNI#1',
        'product_desc' => 'Galaxy S21 5G nằm trong series S21 đến từ Samsung nổi bật với thiết kế tràn viền, cụm camera ấn tượng cho đến hiệu năng mạnh mẽ hàng đầu.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/42/220833/samsung-galaxy-s21-tim-600x600.jpg',
        'product_content' => "<p>Galaxy S21 có 3 màu sắc chính là: Tím, trắng và xám. Cho người dùng thoải mái lựa chọn để phù hợp với phong cách của bản thân nhất.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/220833/galaxy_s21_5g_20.jpg'/></p>",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'iPhone 12 64GB',
        'price' => 20990000,
        'code' => 'UNI#2',
        'product_desc' => 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-violet-1-600x600.jpg',
        'product_content' => "<p>Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-144220-044259.jpg'/></p>",
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'OPPO A74',
        'price' => 6690000,
        'code' => 'UNI#3',
        'product_desc' => 'OPPO luôn đa dạng hoá các sản phẩm của mình từ giá rẻ cho đến cao cấp. Trong đó, điện thoại OPPO A74 4G được nằm trong phân khúc tầm trung rất đáng chú ý với nhiều tính năng và smartphone cũng chính là bản nâng cấp của OPPO A73 ra mắt trước đó.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/42/235653/oppo-a74-blue-9-600x600.jpg',
        'product_content' => "<p>Chiếc điện thoại OPPO A74 vẫn sở hữu cụm camera nằm trong mô-đun hình chữ nhật góc trái thân thuộc của hãng, máy được gia công tỉ mỉ, tối ưu kích thước giúp smartphone mỏng nhẹ, thiết kế thân máy cong 3D mảnh mai, dễ cầm nắm sử dụng.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/235653/oppo-a74-4g-002.jpg'/></p>",
        'cat_id' => 1
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Lenovo Legion 5 15IMH05 i7 10750H/120Hz (82AU0051VN)',
        'price' => 25990000,
        'code' => 'UNI#4',
        'product_desc' => 'Laptop Lenovo Legion 5 15IMH05 i7 (82AU0051VN) là thế hệ laptop gaming được thiết kế theo xu hướng hiện đại. Với vi xử lí đa nhân gen 10, card đồ họa rời mạnh mẽ, Lenovo Legion 5 cho trải nghiệm chiến các tựa game bom tấn cực đã.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/44/225390/lenovo-legion-5-15imh05-i7-82au0051vn-210520-040515-600x600.jpg',
        'product_content' => "<p>Lenovo Legion thiết kế theo phong cách gaming mạnh mẽ nhưng vẫn tạo cảm giác sang trọng. Vỏ máy được phủ sơn màu đen lịch lãm, logo Legion đặt gọn trên mặt lưng tạo điểm nhấn cho thiết kế.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/225390/lenovo-legion-5-15imh05-i7-82au0051vn-223620-103618.jpg'/></p>",
        'cat_id' => 2
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'Acer Aspire 7 A715 42G R4ST R5 5500U (NH.QAYSV.004)',
        'price' => 18990000,
        'code' => 'UNI#5',
        'product_desc' => 'Laptop Acer Aspire 7 A715 42G R4ST R5 (NH.QAYSV.004) có thiết kế đơn giản, trang nhã nhưng trang bị cấu hình mạnh mẽ đáp ứng nhu cầu đồ hoạ, kỹ thuật chuyên nghiệp và chiến game mượt mà.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/44/235405/acer-aspire-7-a715-42g-r4st-r5-nhqaysv004-16-600x600.jpg',
        'product_content' => "<p>Laptop Acer Aspire 7 sở hữu bộ xử lý AMD Ryzen 5 5500U giúp máy hoạt động mượt mà, ổn định khi thực hiện mọi tác vụ và chơi game với 6 lõi 12 luồng. Xử lý nhanh chóng các ứng dụng nặng như AutoCad, After Effect, Premiere,... nhờ xung nhịp trung bình của CPU AMD này là 2.1 GHz và được đẩy lên tối đa 4.0 GHz nhờ công nghệ Turbo Boost.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/235405/a3.jpg'/></p>",
        'cat_id' => 2
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Lenovo Yoga 9 14ITL5 i7/1185G7 (82BG006EVN)',
        'price' => 49990000,
        'code' => 'UNI#6',
        'product_desc' => 'Sang trọng, đẳng cấp, mạnh mẽ là những mỹ từ tóm gọn giá trị mà laptop Lenovo Yoga 9 14ITL5 (82BG006EVN) mang lại cho bạn. Nếu đang tìm 1 chiếc laptop mỏng nhẹ, linh hoạt, cấu hình ấn tượng hỗ trợ các tác vụ nặng, trải nghiệm ngay phiên bản cao cấp này từ Lenovo.',
        'product_thumb'=> 'https://cdn.tgdd.vn/Products/Images/44/239233/lenovo-yoga-9-14itl5-i7-82bg006evn-600x600.jpg',
        'product_content' => "<p>Lenovo Yoga 9 14ITL5 được thiết kế với ngoại hình ấn tượng, chỉ mỏng 15.7 mm và trọng lượng nhẹ 1.37 kg, tựa như 1 cuốn sổ di động để dàng để mang theo trong hành trang cá nhân thường nhật.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/239233/lenovo-yoga-9-14itl5-i7-82bg006evn-2.jpg'/></p>",
        'cat_id' => 2
    ),
 );