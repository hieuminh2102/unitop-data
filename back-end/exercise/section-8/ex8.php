<?php

#1 XÂy dựng hàm kiểm tra số nguyên chẵn
//function check_even($n) {
////    global $n;
//    if ($n % 2 == 0) {
//        return TRUE;
//        return FALSE;
//    }
//}
//
//$t = check_even(2);
//if ($t) {
//    echo "đây là số nguyên chẵn";
//} else {
//    echo "đây là số nguyên lẻ";
//}
# 2 Hàm tính tổng các số nguyên tố từ 2 đến $n ($n >=2)

function check_prime($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return FALSE;
        }
    }
    return true;
}

if (check_prime(2)) {
    echo "đay là sô nguyen to";
} else {
    echo "đay khong là sô nguyen to";
}

function total_prime($n) {
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prime($i)) {
            $t += $i;
            echo "cac so nguyen to la:{$i} <br>";
        }
    }
    return $t;
}

//2 3 5 7
$t = total_prime(7);
echo "tong la: {$t}";
#3 Hàm lấy thông tin chi tiết 1 bài viết theo id trong mảng bài viết
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

function getPostById($id) {
    global $list_post;
    foreach ($list_post as $key => $value) {
        if ($key == $id) {
            return $list_post[$id];
        }
    }
    return false;
}

$item = getPostById(2);
echo "<pre>";
print_r($item);
echo "</pre>";
