<?php
class MathController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("post");
    }
    public function index()
    {

        $data["title"] = "Toán";
        $data["content"] = "Đây là nội dung";
        $data["cssFiles"] = [
            "style.css",
        ];
        $data["x"] = '123456';
        $data["jsFiles"] = [
            "script.js"
        ];
        $content = $this->post->getEntries();
        $this->load->view("layouts/client", "student/math/index", $data);
    }
    public function pathVariable($x, $y)
    {
        echo $x . " " . $y;
    }
}
