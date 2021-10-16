<?php
class HomeController extends BaseController
{
    public function __construct()
    {
    }

    public function renderHome()
    {
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
