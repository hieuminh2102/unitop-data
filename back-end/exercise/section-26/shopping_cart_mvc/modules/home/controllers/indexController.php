<?php

function construct() {
    load('helper', 'format');
}

function indexAction() {
    load_model('index');
    $list_mobile = get_list_product_by_cat_id(1);
    $data['list_mobile'] = $list_mobile;
    $info_cat_mobile = get_info_cat(1);
    $data['info_cat_mobile'] = $info_cat_mobile;
    
    $data['list_macbook'] = get_list_product_by_cat_id(2);
    $data['info_cat_macbook'] = get_info_cat(2); 
    load_view('index', $data);
}

function addAction() {
}

function editAction() {
}
