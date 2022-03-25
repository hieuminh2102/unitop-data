<?php

function is_login(){
    if(!empty($_SESSION['is_login'])){
        return $_SESSION['is_login'];
    }
}