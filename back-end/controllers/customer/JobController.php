<?php
class JobController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderJobListing()
    {
        $data["title"] = "JobListing";
        $data["cssFiles"] = [
            // "css/customer/imported/bootstrap.min.css",
            // "css/customer/imported/animate.min.css",
            // "css/customer/imported/bootstrap-submenu.css",
            // "css/customer/imported/bootstrap-select.min.css",
            // "css/customer/imported/magnific-popup.css",
            // "css/customer/imported/daterangepicker.css",
            // "css/customer/imported/leaflet.css",
            // "css/customer/imported/map.css",
            // "css/customer/imported/jquery.mCustomScrollbar.css",
            // "css/customer/imported/dropzone.css",
            // "css/customer/imported/slick.css",
            // "css/customer/imported/style.css",
            // "css/customer/imported/skins/midnight-blue.css",
            // "css/customer/imported/ie10-viewport-bug-workaround.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $this->load->view("layouts/customer", "customer/job/job-listing", $data);
    }

    public function renderJobDetail()
    {
        $data["title"] = "JobDetail";
        $data["cssFiles"] = [
            // "css/customer/imported/bootstrap.min.css",
            // "css/customer/imported/animate.min.css",
            // "css/customer/imported/bootstrap-submenu.css",
            // "css/customer/imported/bootstrap-select.min.css",
            // "css/customer/imported/magnific-popup.css",
            // "css/customer/imported/daterangepicker.css",
            // "css/customer/imported/leaflet.css",
            // "css/customer/imported/map.css",
            // "css/customer/imported/jquery.mCustomScrollbar.css",
            // "css/customer/imported/dropzone.css",
            // "css/customer/imported/slick.css",
            // "css/customer/imported/style.css",
            // "css/customer/imported/skins/midnight-blue.css",
            // "css/customer/imported/ie10-viewport-bug-workaround.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $this->load->view("layouts/customer", "customer/job/job-detail", $data);
    }
}
