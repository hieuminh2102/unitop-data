<?php

function construct() {

}

function indexAction() {
    load_view('index');
}

function addAction() {
}

function updateAction() {
    $id = $_POST['hehe'];
    echo $id;
}