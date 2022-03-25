<?php

function construct() {
    load_model('index');
    if(!is_login()){
        redirect("?mod=users&controller=index&action=login");
    }
}

function indexAction() {
    load_view('index');
}
