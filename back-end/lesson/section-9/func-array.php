<?php 

//array_key_exists
//$search_array = array('a' => 1, 'b'=>4);
//if(array_key_exists('a', $search_array)){
//    echo "the 'a' element is in the array";
//}

#array_merge
//$array_1 = array(1,5);
//$array_2 = array(6,9);
//$result = array_merge($array_1,$array_2);
//print_r($result);

#count
//$array_1 = array(2,5,6,8);
//echo count($array_1);

#in_array
//$my_array = array(2,3,4,6,7);
//echo in_array(3,$my_array);

#is_array
//$my_array = array(2,3,4,6,7);
//echo is_array($my_array);

#array_values
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));