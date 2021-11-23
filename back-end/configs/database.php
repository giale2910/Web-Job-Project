<?php
$database["host"] = "localhost";
$database["port"] = 3306;
$database["databasename"] = "job_finding";
$database["username"] = "root";
$database["password"]="root";
$database["version"] = "1.1.14";

$database["admins"] = array(
    array(
        "email" => "admin@mail.com",
        "password" => "admin",
        "first_name" => "Andy",
        "last_name" => "Min",
        "profile_link" =>"https://oisp.hcmut.edu.vn/",
        "phone" => "",
        "address" => "",
    )
);
$database["managers"] = array(
    array(
        "email" => "manager1@yahoo.com",
        "password" => "123456",
        "first_name" => "HCMUT",
        "last_name" => "",
        "profile_link" =>"https://oisp.hcmut.edu.vn/",
        "phone" => "0938919001",
        "address" => "246 Ly Thuong Kiet Q.5"
    ),
    array(
        "email" => "manager2@gmail.com",
        "password" => "monkey",
        "first_name" => "Brad-Jonas",
        "last_name" => "Hardick",
        "profile_link" =>"https://www.microsoft.com/vi-vn/",
        "phone" => "0938919001",
        "address" => "TPHCM"
    ),
    array(
        "email" => "manager3@gmail.com",
        "password" => "monkey",
        "first_name" => "Brad",
        "last_name" => "Hardick",
        "profile_link" =>"https://www.microsoft.com/vi-vn/",
        "phone" => "0938919001",
        "address" => "TPHCM",
    ),
);
$database["customers"] = array(
    array(
        "email" => "user1@hcmut.edu.vn",
        "password" => "1011101",
        "first_name" => "A",
        "last_name" => "B",
        "profile_link" =>"https://i.topcv.vn/giale?ref=4782604",
        "phone" => "0938919001",
        "address" => "TPHCM",
    ),
    array(
        "email" => "user2@hcmut.edu.vn",
        "password" => "1212",
        "first_name" => "C",
        "last_name" => "D",
        "profile_link" =>"https://i.topcv.vn/giale?ref=4782604",
        "phone" => "0938919001",
        "address" => "TPHCM"
        
    )
);
