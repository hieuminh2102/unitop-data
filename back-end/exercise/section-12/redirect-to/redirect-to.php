<?php
function redirect_to($url){
    return header("Location: {$url}");
}