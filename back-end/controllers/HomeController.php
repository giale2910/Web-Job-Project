<?php
class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHome()
    {
        $data = parent::baseRenderData();
        echo "home";
    }
    public function home1()
    {
        echo "home1";
    }
    public function home2()
    {
        echo "home2";
    }
    public function home3($name)
    {
        echo "Hello " . $name;
    }
}
