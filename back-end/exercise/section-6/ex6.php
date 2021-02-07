<?php

#1 Tính tổng các số chẵn từ 1 đến n(n>=2)
# T = 2 + 4 + 6 + 8 +...+n 
$t = 0;
$n = 4;
//for($i = 1; $i <= $n; $i++){
//    if($i % 2 == 0){
////        echo "{$i}"."<br>";
//        $t += $i;
//    }
//}
//echo "T = 2 + 4 + 6 + 8 +...+n = {$t}";
#2 Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n(n>=3)
# T=1/3 + 1/6+ ... +1/n
//for ($i = 3; $i <= $n; $i++) {
//    if ($i % 3 == 0) {
////        echo "{$i}"."<br>";
//        $t += 1/$i;
//    }
//}
//echo "T = 1/3 + 1/6 + ... + 1/n = {$t}";
#3 Tính tổng chuỗi 
# t = 1/2 + 2/3 + 3/4 +...+n/(n+1)
//for($i =1; $i <= $n; $i++){
//    $t += $i/($i + 1); 
//}
//echo "t = 1/2 + 2/3 + 3/4 +...+n/(n+1) = {$t}";
#4 Giải phương trình bậc 2
$a = 2;
$b = -7;
$c = 3;
$delta = $b * $b - 4 * $a * $c;
if ($a != 0) {
    if ($delta < 0) {
        echo "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x1 = -$b / (2 * $a);
        echo "x1 = x2 = {$x1}";
    } elseif ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "x1 = {$x1} và x2 = {$x2}";
    }
} else {
    echo 'Đây không phải phương trình bậc 2';
}
?>


