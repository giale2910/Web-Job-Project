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
        "roles" => ["manager"]
    ),
    "management/dashboard" => array(
        "handler" => "management/management/renderPostJobManagement",
        "roles" => ["manager"]
    ),
    "management/post-job" => array(
        "handler" => "management/management/renderPostJobManagement",
        "roles" => ["manager"]
    ),
    "management/update-job" => array(
        "handler" => "management/management/renderUpdateJobManagement",
        "roles" => ["all"]
    ),
    "management/manage-job" => array(
        "handler" => "management/management/renderManageJobManagement",
        "roles" => ["all"]
    ),
    "management/changePassword" => array(
        "handler" => "management/management/renderChangePassword",
        "roles" => ["all"]
    ),
    "management/editProfile"=> array(
        "handler" => "management/management/renderEditProfile",
        "roles" => ["all"]
    ),

    // ADMIN
    "admin" => array(
        "handler" => "admin/admin/renderManagerManagement",
        "roles" => ["admin"]
    ),
    "admin/manage-manager" => array(
        "handler" => "admin/admin/renderManagerManagement",
        "roles" => ["admin"]
    ),
    "admin/manage-user" => array(
        "handler" => "admin/admin/renderUserManagement",
        "roles" => ["admin"]
    ),
    "admin/changePassword" => array(
        "handler" => "admin/admin/renderChangePassword",
        "roles" => ["admin"]
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
    "management/job/addJob" => array(
        "handler" => "management/management/postJob",
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
    "management/job/post" => array(
        "handler" => "customer/job/post",
        "roles" => ["manager", "admin"]
    ),
    "management/job/delete" => array(
        "handler" => "customer/job/delete",
        "roles" => ["manager", "admin"]
    ),
    "management/job/update" => array(
        "handler" => "customer/job/update",
        "roles" => ["manager", "admin"]
    ),
    "job/add-favorite" => array(
        "handler" => "customer/job/addFavorite",
        "roles" => ["all"]
    ),
    "job/remove-favorite" => array(
        "handler" => "customer/job/removeFavorite",
        "roles" => ["all"]
    ),
    "job/get-favorite" => array(
        "handler" => "customer/job/getFavorite",
        "roles" => ["all"]
    ),
    // "user/change-password" => array(
    //     "handler" => "user/changePassword",
    //     "roles" => ["all"]
    // ),
    // "user/edit-profile" => array(
    //     "handler" => "user/editProfile",
    //     "roles" => ["all"]
    // ),
    "admin/user/switch-active" => array(
        "handler" => "user/switchActive",
        "roles" => ["admin"]
    ),

    //
    "change-password" => array(
        "handler" => "user/changePassword",
        "roles" => ["all"]
    ),
    "edit-profile" => array(
        "handler" => "user/editProfile",
        "roles" => ["all"]
    ),
    "admin/change-password" => array(
        "handler" => "user/changePassword",
        "roles" => ["all"]
    ),
    "admin/logout" => array(
        "handler" => "user/logout",
        "roles" => ["all"]
    ),
    "management/edit-profile" => array(
        "handler" => "user/editProfile",
        "roles" => ["all"]
    ),
    "management/change-password" => array(
        "handler" => "user/changePassword",
        "roles" => ["all"]
    ), 
    "management/logout" => array(
        "handler" => "user/logout",
        "roles" => ["all"]
    ),
    //company + jobSeeker
    "company" => array(
        "handler" => "customer/jobseekercompany/renderCompanyListing",
        "roles" => ["all"]
    ),
    "job-seeker" => array(
        "handler" => "customer/jobseekercompany/renderJobseekerListing",
        "roles" => ["all"]
    ),
    "company-job" => array(
        "handler" => "customer/jobseekercompany/renderCompanyJob",
        "roles" => ["all"]
    ),
    //aplly
    "job/apply-job" => array(
        "handler" => "customer/job/applyJob",
        "roles" => ["all"]
    ),
    "job/remove-apply-job" => array(
        "handler" => "customer/job/removeApplyJob",
        "roles" => ["all"]
    ),
    // "job/get-user-apply" => array(
    //     "handler" => "customer/job/getUserApplyForJob",
    //     "roles" => ["all"]
    // ),
    "user-apply" => array(
        "handler" => "customer/job/renderUserApplyForJob",
        "roles" => ["all"]
    ),
    
    
);

$base_dir = "http://localhost:".$_SERVER['SERVER_PORT'];