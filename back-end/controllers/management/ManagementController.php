<?php
class ManagementController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("category");

    }

    public function renderPostJobManagement()
    {
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

    public function renderDashboardManagement()
    {
        $data["title"] = "ManagementDashboard";
        $data["cssFiles"] = [
            "css/customer/imported/bootstrap.min.css",
            "css/customer/imported/animate.min.css",
            "css/customer/imported/bootstrap-submenu.css",
            "css/customer/imported/bootstrap-select.min.css",
            "css/customer/imported/magnific-popup.css",
            "css/customer/imported/daterangepicker.css",
            "css/customer/imported/leaflet.css",
            "css/customer/imported/map.css",
            "css/customer/imported/jquery.mCustomScrollbar.css",
            "css/customer/imported/dropzone.css",
            "css/customer/imported/slick.css",
            "css/customer/imported/style.css",
            "css/customer/imported/skins/midnight-blue.css",
            "css/customer/imported/ie10-viewport-bug-workaround.css",
        ];
        $data["jsFiles"] = [
            
        ];
        // $this->load->view("layouts/admin", "management/dashboard/dashboard", $data);
        $this->load->view("layouts/manager", "management/dashboard/dashboard", $data);

    }

    public function renderManageJobManagement()
    {
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
            "/public/css/imported/component/submit-property.css",
            "/public/css/imported/component/search.css",
            "/public/css/imported/component/bootstrap-select.css",
        ];
        $data["jsFiles"] = [
            
        ];
        $this->load->view("layouts/manager", "management/manage-job/manage-job", $data);

    }

    public function renderChangePassword() {
        $data["title"] = "ChangePassword";
        $this->load->view("layouts/manager", "account/changePassword", $data);
    }

    public function renderEditProfile() {
        $data["title"] = "EditProfile";
        $this->load->view("layouts/manager", "account/editProfile", $data);
    }
}
