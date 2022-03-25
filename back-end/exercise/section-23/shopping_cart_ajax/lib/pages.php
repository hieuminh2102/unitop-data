<?php
#cach 1
// function get_page_by_id($id){
//     global $list_page;
//     foreach($list_page as $key => $item){
//         if($key == $id){
//             return $list_page[$id];
//         }
//     }
//     return false;
// }
#cach 2
function get_page_by_id($id){
    global $list_page;
    if(array_key_exists($id, $list_page)){
        return $list_page[$id];
    }
    return false;
}
