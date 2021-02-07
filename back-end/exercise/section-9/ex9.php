<?php
#2 Xuất một mảng số nguyên chẵn từ 1 mảng số nguyên cho trước
$list_num = array(2, 3, 4, 5, 6, 8, 12);
$list_even = array();

function get_even($list_num = array()) {
    global $list_even;
    if (!empty($list_num) && is_array($list_even)) {
        foreach ($list_num as $key => $value) {
            if ($value % 2 == 0) {
                $list_even[] = $value;
            }
        }
        return $list_even;
    }
}

$list_even = get_even($list_num);
echo "<pre>";
print_r($list_even);
echo "</pre>";

#1 Tính số trang $num_page hiển thị khi có tổng số bài $total_row 
//và số bài trên mỗi trang $num_per_page

function get_num_page($total_rows, $num_per_page) {
    $num_page = ceil($total_rows / $num_per_page);
    return $num_page;
}

echo get_num_page(11, 3);

#3 hiển thị mảng danh mục theo đa cấp
$list_post_cat = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'Giáo dục',
        'level' => 0
    ),
    2 => array(
        'cat_id' => 2,
        'cat_title' => 'khuyến học',
        'level' => 1
    ),
    3 => array(
        'cat_id' => 3,
        'cat_title' => 'du học',
        'level' => 1
    ),
    4 => array(
        'cat_id' => 4,
        'cat_title' => 'thể thao',
        'level' => 0
    ),
    5 => array(
        'cat_id' => 5,
        'cat_title' => 'châu âu',
        'level' => 1
    ),
    6 => array(
        'cat_id' => 6,
        'cat_title' => 'châu á',
        'level' => 1
    ),
);
?>
<html>
    <head>
        <title>Mảng danh mục theo đa cấp</title>

    </head>
    <body>  
        <table border='1'>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Danh mục</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                if (!empty($list_post_cat)) {
                    foreach ($list_post_cat as $item) {
                        $temp++;
                        ?>
                        <tr>
                            <td><?php echo $temp; ?></td>
                            <td><?php echo str_repeat('--', $item['level']).' '. $item['cat_title']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </body>
</html>