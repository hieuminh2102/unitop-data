<?php
    function show_gender($gender){
        $list_gender = array(
            'male' => 'nam',
            'female' => 'nữ'
        );
        if(array_key_exists($gender, $list_gender)){
            return $list_gender[$gender];
        }
    }
?>