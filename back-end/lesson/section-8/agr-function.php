<?php

# 1 hàm có 1 tham số
//function check_even($n){
//    if($n % 2 ==0){
//        echo "{$n} là số chẵn";
//    }
//}
//check_even(10);
# 2 hàm có 2 tham số
//function sum($a, $b){
//    $t = $a + $b;
//    echo $t;
//}
//sum(9, 8);
# 3 hàm xuất dữ liệu ở dạng mảng

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

# 4 hàm có tham số tùy biến
//Cách 1: tính tổng tham số hàm
//function sum_multi_number() {
//    echo func_num_args(); // lấy số lượng tham số
//    $a = func_get_arg(0); //lấy giá trị tham số HÀM riêng lẻ với index là 0
//    $b = func_get_arg(1); //lấy giá trị tham số HÀM riêng lẻ với index là 1
//    echo "a = {$a} <br> b = {$b}";
//    
//    $list_args = func_get_args(); //Lấy mảng tham số hàm
//    show_array($list_args);
//   
//    $t=0;
//    foreach ($list_args as $value) {
//        $t += $value;
//    }
//    echo "Tổng là: {$t}";
//}
//
//sum_multi_number(2, 5, 7, 9);
# cách 2: tính tổng mảng đã có sẵn
$list_number = array(3, 5, 7);

function sum_multi_number($list_number = array()) {
    if (is_array($list_number)) {
        $t = 0;
        foreach ($list_number as $value) {
            $t += $value;
        }
        echo $t;
    }
}

sum_multi_number($list_number);

# 5 
//<input type='text' name='' value = '' id='' class=''/>

function create_input_text($name, $value, $option = array()) {
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    }
    show_array($option);
    $input_html="<input type='text' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
    echo $input_html;
}
create_input_text('hieuminhdo', '', $option=array('id'=>'username', 'class'=>'form_input'));
