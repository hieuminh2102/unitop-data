<?php
    $conn = mysqli_connect('localhost', 'root', '', 'unitop_data');
    if(!$conn){
        echo "kết nối không thành công" . mysqli_connect_error();
    }else{
        echo "kết nối thành công";
    }
?>