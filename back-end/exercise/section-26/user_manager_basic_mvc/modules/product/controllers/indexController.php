<?php

function construct() {
    load_model('index');
    if(!is_login()){
        redirect("?mod=users&controller=index&action=login");
    }
}
// load trang product
function indexACtion(){
    load_view('product');
}

