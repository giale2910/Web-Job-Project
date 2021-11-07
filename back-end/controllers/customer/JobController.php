<?php
class JobController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("job");
        $this->load->model("category");
    }

    public function renderJobListing()
    {
        $data["title"] = "JobListing";
        $data["cssFiles"] = [
            "/public/css/imported/bootstrap.min.css",
            "/public/css/imported/animate.min.css",
            "/public/css/imported/bootstrap-submenu.css",
            "/public/css/imported/bootstrap-select.min.css",
            "/public/css/imported/magnific-popup.css",
            "/public/css/imported/daterangepicker.css",
            "/public/css/imported/leaflet.css",
            "/public/css/imported/map.css",
            "/public/fonts/font-awesome/css/font-awesome.min.css",
            "/public/fonts/flaticon/font/flaticon.css",
            "/public/fonts/linearicons/style.css",
            "/public/css/imported/jquery.mCustomScrollbar.css",
            "/public/css/imported/dropzone.css",
            "/public/css/imported/slick.css",
            "/public/css/imported/skins/midnight-blue.css",
            "/public/css/imported/ie10-viewport-bug-workaround.css",
            "/public/css/imported/component/header.css",
            "/public/css/imported/component/public.css",
            "/public/css/imported/component/footer.css",
            "/public/css/imported/component/custom-animation.css",
            // Body
            "/public/css/imported/component/banner.css",
            "/public/css/imported/component/sidebar-right.css",
            "/public/css/imported/component/search.css",
            "/public/css/imported/component/pagination-box.css",
            "/public/css/imported/component/option-bar.css",
            "/public/css/imported/component/job-box.css"

        ];
        $data["jsFiles"] = [
            "/public/js/imported/ie-emulation-modes-warning.js",
            "/public/js/imported/jquery-2.2.0.min.js",
            "/public/js/imported/popper.min.js",
            "/public/js/imported/bootstrap.min.js",
            "/public/js/imported/bootstrap-submenu.js",
            "/public/js/imported/rangeslider.js",
            "/public/js/imported/jquery.mb.YTPlayer.js",
            "/public/js/imported/bootstrap-select.min.js",
            "/public/js/imported/jquery.easing.1.3.js",
            "/public/js/imported/jquery.scrollUp.js",
            "/public/js/imported/jquery.mCustomScrollbar.concat.min.js",
            "/public/js/imported/leaflet.js",
            "/public/js/imported/leaflet-providers.js",
            "/public/js/imported/leaflet.markercluster.js",
            "/public/js/imported/moment.min.js",
            "/public/js/imported/daterangepicker.min.js",
            "/public/js/imported/dropzone.js",
            "/public/js/imported/slick.min.js",
            "/public/js/imported/jquery.filterizr.js",
            "/public/js/imported/jquery.magnific-popup.min.js",
            "/public/js/imported/jquery.countdown.js",
            "/public/js/imported/maps.js",
            "/public/js/imported/app.js",
            // Body
            "/public/css/imported/component/banner.css",
            "/public/css/imported/component/job-box.css",
            "/public/css/imported/component/amenities.css",
            "/public/css/imported/component/job-detail.css",
            "/public/css/imported/component/sidebar-right.css"
        ];
        $data["jobList"] = $this->getJobView();
        $data["categoryList"] = $this->getCategoryList();
        $this->load->view("layouts/customer", "customer/job/job-listing", $data);
    }

    public function renderJobDetail()
    {
        $data["title"] = "JobDetail";
        $data["cssFiles"] = [
            "/public/css/imported/bootstrap.min.css",
            "/public/css/imported/animate.min.css",
            "/public/css/imported/bootstrap-submenu.css",
            "/public/css/imported/bootstrap-select.min.css",
            "/public/css/imported/magnific-popup.css",
            "/public/css/imported/daterangepicker.css",
            "/public/css/imported/leaflet.css",
            "/public/css/imported/map.css",
            "/public/fonts/font-awesome/css/font-awesome.min.css",
            "/public/fonts/flaticon/font/flaticon.css",
            "/public/fonts/linearicons/style.css",
            "/public/css/imported/jquery.mCustomScrollbar.css",
            "/public/css/imported/dropzone.css",
            "/public/css/imported/slick.css",
            "/public/css/imported/skins/midnight-blue.css",
            "/public/css/imported/ie10-viewport-bug-workaround.css",
            "/public/css/imported/component/header.css",
            "/public/css/imported/component/public.css",
            "/public/css/imported/component/footer.css",
            "/public/css/imported/component/custom-animation.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $data["jobDetail"] = $this->getJobDetail($_GET["id"]);
        $this->load->view("layouts/customer", "customer/job/job-detail", $data);
    }

    public function getJobView(){
        # $jobType = $_GET["job-type"];
        $jobs = $this->job->getJobView();
        return $jobs;
    }

    public function getCategoryList(){
        $categories = $this->category->getCategoryList();
        return $categories;
    }

    public function getJobDetail($id){
        $result["overview"] = $this->job->getJobOverview($id);
        $result["experience"] = $this->job->getJobExperience($id);
        $result["responsibility"] = $this->job->getJobResponsibility($id);
        return $result;
    }
}
