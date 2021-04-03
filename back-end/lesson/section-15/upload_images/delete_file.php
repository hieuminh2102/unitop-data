<?php
$file_url = "uploads/icon-fb.jpg";
if(@unlink($file_url)){
    echo "xóa file {$file_url} thành công";
}else{
    echo "file {$file_url} không tồn tại trên hệ thống";
}