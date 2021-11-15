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
        $data["jobList"] = $this->getJobView();
        $data["categoryList"] = $this->getCategoryList();
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
        $data["jobDetail"] = $this->getJobDetail($_GET["id"]);
        $this->load->view("layouts/customer", "customer/job/job-detail", $data);
    }

    public function getJobView(){
        $filter = array();
        $page = isset($_GET["page"]) ? 0 : ($_GET["page"])*10;
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
        $jobs = $this->job->getJobView($searchTerm);
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

    public function postJob(){
        /*
        TODO [front-end]: 
        Job(title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description)
        */
        $this->job->postJob($_POST);
    }
}
