<?php
$routes = array(
    "" => array(
        "handler" => "home/renderHome",
        "roles" => ["all"]
    ),
    "login" => array(
        "handler" => "user/renderLoginForm",
        "roles" => ["all"]
    ),
    "register" => array(
        "handler" => "user/renderRegisterForm",
        "roles" => ["all"]
    ),
    "user/register" => array(
        "handler" => "user/register",
        "roles" => ["all"]
    ),
    "user/login" => array(
        "handler" => "user/login",
        "roles" => ["all"]
    ),
    "logout" => array(
        "handler" => "user/logout",
        "roles" => ["all"]
    ),
    "shop" => array(
        "handler" => "customer/product/renderHomeShop",
        "roles" => ["all"]
    ),
    "admin" => array(
        "handler" => "admin/dashboard/renderDashboard",
        "roles" => ["all"]
    ),
    "home" => array(
        "handler" => "customer/home/renderHomePage",
        "roles" => ["all"]
    )
);
