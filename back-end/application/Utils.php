<?php

/* 
for front-end/public debug
this will pop an alert box on screen
*/
function debugAlert($msg) {
    $output = $msg;
    if (is_array($output)) $output = implode(',', $output);
    $output = addslashes($output);
    echo "<script>console.log('Debug Msg: $output');</script>";
}

function backendAlert($msg, $redirectPath="/") {
    echo "<script>alert('$msg');document.location='$redirectPath';</script>";
}

// https://stackoverflow.com/questions/6899097/how-to-add-a-parameter-to-the-url
function urlUpdate($name, $value){
    $href = $_SERVER['REQUEST_URI'];
    $regex = '/[&\\?]' . $name . "=/";
    if(preg_match($regex, $href)) {
        $regex = '/([&\\?])'.$name.'=[\\d]+/';
        $link = preg_replace($regex, '${1}' . $name . '=' . $value, $href);
    } else {
        if(strpos($href, '?')!=false) {
            $link = $href . "&" . $name . "=" . $value;
        } else {
            $link = $href . "?" . $name . "=" . $value;
        }
    }
    echo $link;
}

/*
sql date format: yyyy-mm-dd
intended date format: Mon dd,yyyy
*/
function dateFormat($sqlDate) {
    $date = date_create($sqlDate);
    return date_format($date, "M d,Y");
}
?>