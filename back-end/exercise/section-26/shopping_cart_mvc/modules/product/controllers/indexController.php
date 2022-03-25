<?php

function construct() {
    load_model('index');
    load('helper', 'format');
}

function indexAction() {
    $cat_id = (int)$_GET['cat_id'];
    $info_cat = get_info_cat($cat_id);
    // show_array($info_cat);
    $list_item = get_list_product_by_cat_id($cat_id);
    $data['info_cat'] = $info_cat;
    $data['list_item'] = $list_item;

    load_view('index', $data);
}

function detailAction(){
    $id = (int)$_GET['id'];
    $item = get_product_by_id($id);
    $data['item'] = $item;
    load_view('detail', $data);
}
