<?php
//1- T = 2 + 4 + 6 + 8 + ... + n (n>=2)
//Phân tích thuật toán
//B1: tạo ra từng số hạng đúng điều kiện
//B2: Tính tổng
//B3: Xuất kết quả
//$t1 = 0;
//$n = 10;
//========cách 1========
//for($i = 2; $i <= $n; $i++){
////    echo "{$i}"."<br>";
//    if($i % 2 == 0){
//        $t1 = $t1 + $i;
//    }
//}
//echo "T1 = {$t1}";
//=======Cách 2========
//for($i = 2; $i <= $n; $i+=2){
//        $t1 = $t1 + $i;
//}
//echo "T1 = {$t1}";

//2- T2= 1/3 + 1/6 +.. +1/n (n>=3)
$t2=0;
$n = 6;
//        ==========cách 1========
//for($i =3; $i <= $n; $i++){
//    if($i % 3 == 0){
//        $t2 += 1/$i;
//    }
//}
//echo "T2 = {$t2}";

//        ==========cách 2========
//for($i =3; $i <= $n; $i+=3){
//        $t2 += 1/$i;
//}
//echo "T2 = {$t2}";

//3- T3 = 1/2 +2/3 +3/4+ ...+ n/n+1(n>=1)
//$t3=0;
//$n=1;
//for($i =1; $i<=$n; $i++){
//    $t3 += $i/($i+1);
//}
//echo "T3 = {$t3}";

//4- Giải phương trình bậc 2
$a = 2;
$b = -7;
$c = 3;
$delta = $b*$b - 4*$a*$c;
if($a != 0){
    //giải
    if($delta < 0){
        echo 'Phương trình vô nghiệm';
    }elseif ($delta == 0) {
        $x = -$b/(2*$a);
        echo "Phương trình có nghiệm kép x = {$x}";
    }elseif ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) /(2*$a);
        $x2 = (-$b - sqrt($delta)) /(2*$a);
        echo "x1= {$x1} x2 = {$x2}";
        
    }
} else {
    echo 'Đây không phải phương trình bậc 2';
}
    
    
    
    
    
    
    
    
    
    
    
    