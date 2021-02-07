<?php

//Tính tổng các số chẵn từ 0 đến 10
//T = 0 + 2 + 4 + 6 + 8 + 10 (2k)
// 0 1 2 3 4 5 6 7 8 9 10

$t = 0;
for($i = 0; $i <=10; $i++){
//    echo $i. "<br>";
    if($i % 2 == 0){
        $t += $i;
    }
}
echo "Kết quả: {$t}";
