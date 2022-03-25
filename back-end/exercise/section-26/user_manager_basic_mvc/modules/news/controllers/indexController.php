<?php

function construct() {
    load_model('index');
    //chưa đăng nhập thì đấy ra trang đăng nhập
    if(!is_login()){
        redirect("?mod=users&controller=index&action=login");
    }
}

function newsAction() {
    load_view('news');
}

function courseAction() {
    load_view('course');
}