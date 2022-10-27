<?php
function is_user_logged_in(){
    return true;
}

function select_bg($color_name){
    $result="";
    switch ($color_name){
        case 'blue';
        $result='#00c';
        break;
        case 'red';
        $result='#c00';
        break;
        case 'green';
        $result='#0c0';
        break;
    }
    return $result;
}