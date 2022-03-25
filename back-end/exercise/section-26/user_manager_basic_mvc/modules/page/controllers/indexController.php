<?php

function construct() {
    load_model('index');
    if(!is_login()){
        redirect("?mod=users&controller=index&action=login");
    }
}
// load trang about
function aboutAction(){
    load_view('about');
}
// load trang contact
function contactAction(){
    load_view('contact');
}

