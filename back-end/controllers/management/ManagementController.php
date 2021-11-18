<?php
class ManagementController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        $this->load->model("category");
        $this->load->model("job");
    }

    public function renderPostJobManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManagementPostJob";
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
            "/public/css/imported/component/dashboard.css",
            // Body
            "/public/css/imported/component/submit-property.css",
            "/public/css/imported/component/search.css",
            "/public/css/imported/component/bootstrap-select.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $data["categoryList"] = $this->getCategoryList();

        // $this->load->view("layouts/admin", "management/post-job/post-job", $data);

        $this->load->view("layouts/manager", "management/post-job/post-job", $data);

    }

    public function getCategoryList(){
        $categories = $this->category->getCategoryList();
        return $categories;
    }
    
    public function postJob()
    {
        $product = $_POST;
        $product["id"] = $_SESSION["user_id"];
        $product["manager_id"] = $_SESSION["user_id"];
        $product["date_posted"] = date("Y-m-d");
        if (!$product["salary"]) $product["salary"]=0;
        if (!$product["min_experience"]) $product["min_experience"]=-1;
        echo '<script>';
        echo 'console.log('. json_encode( $product ) .')';
        echo '</script>';
        $this->job->insertNewJob($product);
        backendAlert("Job posted successfully!");
    }

    public function renderDashboardManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManagementDashboard";
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
            "/public/css/imported/component/dashboard.css",
            // Body
            "/public/css/imported/component/submit-property.css",
            "/public/css/imported/component/search.css",
            "/public/css/imported/component/bootstrap-select.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $data["categoryList"] = $this->getCategoryList();
        $data["jobDetail"] = $this->getJobDetail($_GET["id"]);
        $this->load->view("layouts/manager", "management/update-job/update-job", $data);

    }

    public function renderUpdateJobManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManagementUpdateJob";
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
            "/public/css/imported/component/dashboard.css",
            // Body
            "/public/css/imported/component/submit-property.css",
            "/public/css/imported/component/search.css",
            "/public/css/imported/component/bootstrap-select.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $data["categoryList"] = $this->getCategoryList();
        $data["jobDetail"] = $this->getJobDetail($_GET["id"]);
        $this->load->view("layouts/manager", "management/update-job/update-job", $data);

    }

    public function renderManageJobManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManagementManageJob";
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
            "/public/css/imported/component/dashboard.css",
            // Body
            "/public/css/imported/component/job-info.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $data["jobList"] = $this->getMyPostedJob();
        $this->load->view("layouts/manager", "management/manage-job/manage-job", $data);

    }

    public function renderChangePassword()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ChangePassword";
        $this->load->view("layouts/manager", "account/changePassword", $data);
    }

    public function renderEditProfile()
    {
        $data = parent::baseRenderData();
        $data["title"] = "EditProfile";
        $data["userInfo"] = $this->userInfo;
        $this->load->view("layouts/manager", "account/editProfile", $data);
    }

    public function getJobDetail($id) {
        $result["overview"] = $this->job->getJobOverview($id);
        $result["experience"] = $this->job->getJobExperience($id);
        $result["responsibility"] = $this->job->getJobResponsibility($id);
        return $result;
    }

    public function getMyPostedJob() {
        $myPostedJobs = $this->job->getJobByUserId($_SESSION["user_id"]);
        return $myPostedJobs;
    }

}
