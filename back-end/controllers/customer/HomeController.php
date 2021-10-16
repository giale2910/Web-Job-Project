<?php
class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHomePage()
    {
        $data["title"] = "Home";
        $data["cssFiles"] = [
            "css/customer/homepage/homepage.css",

        ];
        $data["jsFiles"] = [
            "libs/rateit.js-master/scripts/jquery.rateit.js"
        ];
        // $this->load->view("layouts/client", "client/homepage/homepage", $data);
        echo json_encode($data);
    }
}
