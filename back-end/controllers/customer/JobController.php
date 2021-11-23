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
            // Body
            "/public/css/imported/component/banner.css",
            "/public/css/imported/component/job-box.css",
            "/public/css/imported/component/amenities.css",
            "/public/css/imported/component/job-detail.css",
            "/public/css/imported/component/sidebar-right.css",
            "/public/css/imported/component/map.css"
        ];
        $data["jsFiles"] = [];
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

    public function getCategoryList()
    {
        $categories = $this->category->getCategoryList();
        return $categories;
    }

    public function getJobDetail($id)
    {
        $result["overview"] = $this->job->getJobOverview($id);
        $result["experience"] = $this->job->getJobExperience($id);
        $result["responsibility"] = $this->job->getJobResponsibility($id);
        return $result;
    }

    public function post()
    {
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
        global $categories;
        global $location;
        global $category;
        global $page;

        $filter = array();
        debugAlert($_GET["minsal"]);
        debugAlert($_GET["maxsal"]);

        $page = isset($_GET["page"]) ? ($_GET["page"]) : 0 ;
        if (isset($_GET["search"])) $filter[] = "title LIKE '%".$_GET["search"]."%'";
        $location = isset($_GET["Location"]) ? $_GET["Location"] : 0;
        if ($location && strpos($location, "All")===false)
            $filter[] = "city = '".$_GET["Location"] . "'";
        // Make this multiple choice if needed
        // if ($_GET["categories"]) $filter[] = "category IN (".implode(",", $_GET["categories"]).")";
        $category = isset($_GET["categories"]) ? $_GET["categories"] : 0;
        if ($category && strpos($category, "All")===false)
            $filter[] = "category = '" . $category . "'";
        if (isset($_GET["minexp"]) && $_GET["minexp"] > 0) $filter[] = "(min_experience = -1 OR min_experience >= ".$_GET["minexp"] . ")";
        if (isset($_GET["maxexp"]) && $_GET["maxexp"] > 0) $filter[] = "(min_experience = -1 OR min_experience <= ".$_GET["maxexp"] . ")";
        if (isset($_GET["minsal"]) && $_GET["minsal"] > 0) $filter[] = "(salary = -1 OR salary >= ".$_GET["minsal"] . ")";
        if (isset($_GET["maxsal"]) && $_GET["maxsal"] > 0) $filter[] = "(salary = -1 OR salary <= ".$_GET["maxsal"] . ")";

        if (isset($_GET["job-type"])) $filter[] = "job_type = '" . $_GET["job-type"] . "'";

        $quals = array();
        if (isset($_GET["high-school"]) &&  $_GET["high-school"]==="on")  $quals[] = "'High School'";
        if (isset($_GET["undergraduate"]) && $_GET["undergraduate"]==="on") $quals[] = "'Undergraduate'";
        if (isset($_GET["graduate"]) && $_GET["graduate"]==="on") $quals[] = "'Graduate'";
        if (count($quals)!==0) $filter[] = "qualification IN (" . implode(",", $quals) . ")";

        $searchTerm = (count($filter) === 0) ? "" : "WHERE " . implode(" AND ", $filter);
        $searchTerm .= " LIMIT 10 OFFSET " . $page*10;

        if (isset($_GET["sort"])) $searchTerm .= " ORDER BY " . $_GET["sort"];

        debugAlert("Search term:" . $searchTerm);
        $jobs = $this->job->getJobView($searchTerm);
        return $jobs;
    }
}
