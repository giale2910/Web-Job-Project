<?php
$routes = array(
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
    
);
