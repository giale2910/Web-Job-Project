<?php
$routes = array(
    /* 1. render path (public path) */
    "" => array(
        "handler" => "customer/home/renderHomePage",
        "roles" => ["all"]
    ),
    "job-listing" => array(
        "handler" => "customer/job/renderJobListing",
        "roles" => ["all"]
    ),
    "job-detail" => array(
        "handler" => "customer/job/renderJobDetail",
        "roles" => ["all"]
    ),
    "home" => array(
        "handler" => "customer/home/renderHomePage",
        "roles" => ["all"]
    ),
    "management" => array(
        "handler" => "management/management/renderDashboardManagement",
        "roles" => ["manager"]
    ),
    "management/dashboard" => array(
        "handler" => "management/management/renderDashboardManagement",
        "roles" => ["manager"]
    ),
    "management/post-job" => array(
        "handler" => "management/management/renderPostJobManagement",
        "roles" => ["manager"]
    ),
    "login" => array(
        "handler" => "user/renderLoginForm",
        "roles" => ["all"]
    ),
    "register" => array(
        "handler" => "user/renderRegisterForm",
        "roles" => ["all"]
    ),
    /* 2. API path (GET / POST function to the respective controller, private path) */
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
    "management/job/post" => array(
        "handler" => "customer/job/post",
        "roles" => ["manager", "admin"]
    )
    
);
