<?php

class JobSeekerCompanyController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        // $this->load->model("job");
        $this->load->model("category");
    }

    public function renderCompanyListing()
    {
        
        $data = parent::baseRenderData();
        $data["title"] = "JobListing"; 
        $data["companyList"] = $this->getAllManagers();
        $data["categoryList"] = $this->getCategoryList();
        $this->load->view("layouts/customer", "customer/company/company", $data);
    }
    public function renderJobseekerListing()
    {
        
        $data = parent::baseRenderData();
        $data["title"] = "JobListing"; 
        $data["jobseekerList"] = $this->getAllUsers();
        $data["categoryList"] = $this->getCategoryList();
        $this->load->view("layouts/customer", "customer/job-seeker/job-seeker", $data);
    }

    public function getCategoryList()
    {
        $categories = $this->category->getCategoryList();
        return $categories;
    }

    public function getAllUsers()
    {
        global $categories;
        global $location;
        global $category;
        global $page;

        $filter = array();

        $page = isset($_GET["page"]) ? ($_GET["page"])*10 : 0 ;

        if (isset($_GET["search"])) $filter[] = "first_name LIKE '%".$_GET["search"]."%'";
        $location = isset($_GET["Location"]) ? $_GET["Location"] : 0;
        if ($location && strpos($location, "All")===false)
            $filter[] = "city = '".$_GET["Location"] . "'";

        $category = isset($_GET["categories"]) ? $_GET["categories"] : 0;
        if ($category && strpos($category, "All")===false)
            $filter[] = "category = '" . $category . "'";
        

        $searchTerm = (count($filter) === 0) ? "" : "WHERE " . implode(" AND ", $filter);
        // $searchTerm .= " LIMIT 10 OFFSET " . $page;

        if (isset($_GET["sort"])) $searchTerm .= " ORDER BY " . $_GET["sort"];

        debugAlert("Search term:" . $searchTerm);
        $user = $this->user->getAllUsers($searchTerm);
        return $user;
    }
    public function getAllManagers()
    {
        global $categories;
        global $location;
        global $category;
        global $page;

        $filter = array();

        $page = isset($_GET["page"]) ? ($_GET["page"])*10 : 0 ;

        if (isset($_GET["search"])) $filter[] = "address LIKE '%".$_GET["search"]."%'";
        $location = isset($_GET["Location"]) ? $_GET["Location"] : 0;
        if ($location && strpos($location, "All")===false)
            $filter[] = "city = '".$_GET["Location"] . "'";

        $category = isset($_GET["categories"]) ? $_GET["categories"] : 0;
        if ($category && strpos($category, "All")===false)
            $filter[] = "category = '" . $category . "'";
        

        $searchTerm = (count($filter) === 0) ? "" : "WHERE " . implode(" AND ", $filter);
        // $searchTerm .= " LIMIT 10 OFFSET " . $page;

        if (isset($_GET["sort"])) $searchTerm .= " ORDER BY " . $_GET["sort"];

        debugAlert("Search term:" . $searchTerm);
        $manager = $this->user->getAllManagers($searchTerm);
        return $manager;
    }

}
