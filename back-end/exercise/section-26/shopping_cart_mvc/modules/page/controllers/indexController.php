<?php

function construct() {
    load_model('index');
}

function indexAction() {
}

function detailAction(){
    #Buoc 1: Get id url
    $id = (int)$_GET['id'];
    // echo $id;
    #Buoc 2: Xay dung ham
    $item = get_page_by_id($id);
    // show_array($item);
    $data['item'] = $item;
    load_view('detail', $data);
}
