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

/*
sql date format: yyyy-mm-dd
intended date format: Mon dd,yyyy
*/
function dateFormat($sqlDate) {
    $date = date_create($sqlDate);
    return date_format($date, "M d,Y");
}
?>