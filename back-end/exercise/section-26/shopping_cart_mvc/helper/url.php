<?php

function base_url($url = "")
{
    global $config;
    return $config['base_url'] . $url;
}
function redirect($path)
{
    if (!empty($path)) {
        header("location: $path");
    }
}
