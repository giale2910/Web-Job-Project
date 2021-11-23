<?php
class JobController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        $this->load->model("job");
        $this->load->model("category");
    }

    public function renderJobListing()
    {
        $data = parent::baseRenderData();
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
        $data["page"] = isset($_GET["page"]) ? ($_GET["page"]) : 0;
        $data["categoryList"] = $this->getCategoryList();
        $data["favoriteIds"] = $this->getFavorite();
        $this->load->view("layouts/customer", "customer/job/job-listing", $data);
    }

    public function renderJobDetail()
    {
        $data = parent::baseRenderData();
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

    public function renderFavJob()
    {
        $data = parent::baseRenderData();
        $data["title"] = "Favorite Job";
        $data["jobList"] = $this->job->getUserFavoriteJobs();
        $data["favoriteIds"] = $this->getFavorite();
        $data["page"] = isset($_GET["page"]) ? ($_GET["page"]) : 0;
        debugAlert($data["jobList"]);
        $this->load->view("layouts/customer", "customer/job/fav-job", $data);
    }

    public function getCategoryList() {
        $categories = $this->category->getCategoryList();
        return $categories;
    }

    public function getJobDetail($id) {
        $result["overview"] = $this->job->getJobOverview($id);
        $result["experience"] = $this->job->getJobExperience($id);
        $result["responsibility"] = $this->job->getJobResponsibility($id);
        return $result;
    }

    public function post(){
        /*
        TODO [front-end]: 
        Job(title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description)
        */
        debugAlert("Posting job");
        $_POST["manager_id"] = $_SESSION["user_id"];
        $_POST["date_posted"] = date("Y-m-d");
        $_POST["deadline"] = substr($_POST["deadline"], 0, 10);
        $this->job->postJob($_POST);
        echo "<script>alert('Job added!'); document.location='/management';</script>";
    }

    public function addFavorite()
    {
        if (!isset($_SESSION["user_id"])) return null;
        $this->job->addFavoriteJob($_POST);
    }

    public function removeFavorite()
    {
        if (!isset($_SESSION["user_id"])) return null;
        $this->job->removeFavoriteJob($_POST);
    }

    public function getFavorite()
    {
        if (!isset($_SESSION["user_id"])) return array();
        $favoriteJobs = $this->job->getUserFavoriteJobs();
        $favoriteIds = array_map(fn($row):string => $row["job_id"], $favoriteJobs);
        return $favoriteIds;
    }

    public function getJobView(){
        $filter = array();
        $page = isset($_GET["page"]) ? ($_GET["page"])*10 : 0;
        if ($_GET["search"]) $filter[] = "title LIKE '%".$_GET["search"]."%'";
        $location = $_GET["Location"];
        if ($location && strpos($location, "All")===false)
            $filter[] = "city = '".$_GET["Location"] . "'";
        // Make this multiple choice if needed
        // if ($_GET["categories"]) $filter[] = "category IN (".implode(",", $_GET["categories"]).")";
        $category = $_GET["categories"];
        if ($category && strpos($category, "All")===false)
            $filter[] = "category = '" . $category . "'";
        if ($_GET["minexp"]) $filter[] = "(min_experience = -1 OR min_experience >= ".$_GET["minexp"] . ")";
        if ($_GET["maxexp"]) $filter[] = "(min_experience = -1 OR min_experience <= ".$_GET["maxexp"] . ")";
        if ($_GET["minsal"]) $filter[] = "(salary = -1 OR salary >= ".$_GET["minsal"] . ")";
        if ($_GET["maxsal"]) $filter[] = "(salary = -1 OR salary <= ".$_GET["maxsal"] . ")";

        if ($_GET["job-type"]) $filter[] = "job_type = '" . $_GET["job-type"] . "'";

        $quals = array();
        if ($_GET["high-school"]==="on")  $quals[] = "'High School'";
        if ($_GET["undergraduate"]==="on") $quals[] = "'Undergraduate'";
        if ($_GET["graduate"]==="on") $quals[] = "'Graduate'";
        if (count($quals)!==0) $filter[] = "qualification IN (" . implode(",", $quals) . ")";

        $searchTerm = (count($filter)===0) ? "" : "WHERE ".implode(" AND ", $filter);
        $searchTerm .= " LIMIT 10 OFFSET " . $page;
        if ($_GET["sort"]) $searchTerm .= " ORDER BY " . $_GET["sort"];
        debugAlert("Search term:" . $searchTerm);
        return $this->job->getJobView($searchTerm);
    }
}
