<?php
$routes = array(
    /* 1. render path (public path) */
    // HOME
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
    "fav-job" => array(
        "handler" => "customer/job/renderFavJob",
        "roles" => ["all"]
    ),
    "home" => array(
        "handler" => "customer/home/renderHomePage",
        "roles" => ["all"]
    ),
    // MANAGER
    "management" => array(
        "handler" => "management/management/renderDashboardManagement",
        "roles" => ["all"]
    ),
    "management/dashboard" => array(
        "handler" => "management/management/renderDashboardManagement",
        "roles" => ["all"]
    ),
    "management/post-job" => array(
        "handler" => "management/management/renderPostJobManagement",
        "roles" => ["all"]
    ),
    // ADMIN
    "admin" => array(
        "handler" => "admin/admin/renderManagerManagement",
        "roles" => ["all"]
    ),
    "admin/manage-manager" => array(
        "handler" => "admin/admin/renderManagerManagement",
        "roles" => ["all"]
    ),
    "admin/manage-user" => array(
        "handler" => "admin/admin/renderUserManagement",
        "roles" => ["all"]
    ),
    // SIGN IN - SIGN UP
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
    "user/change-password" => array(
        "handler" => "user/changePassword",
        "roles" => ["all"]
    ),
    "user/edit-profile" => array(
        "handler" => "user/editProfile",
        "roles" => ["all"]
    ),
    
);
