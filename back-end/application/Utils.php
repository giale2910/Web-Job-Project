<?php

/* 
for front-end/public debug
this will pop an alert box on screen
*/
function debugAlert($msg) {
    echo "<script>alert('$msg');</script>";
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