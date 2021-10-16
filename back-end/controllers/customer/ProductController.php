<?php
class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHomeShop()
    {
        $data["title"] = "Shop";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/shoppage/checkbox-filter.css",
            "css/customer/shoppage/toprate.css",
            "css/customer/shoppage/tagsproduct.css",
            "css/customer/shoppage/banner.css",
            "css/customer/shoppage/card-product.css",
            "css/customer/shoppage/grid-products.css",
            "css/customer/commons/pagination.css",
            "css/customer/shoppage/filter.css",
            "libs/rateit.js-master/scripts/rateit.css",

        ];
        $data["jsFiles"] = [
            "libs/rateit.js-master/scripts/jquery.rateit.js"
        ];
        $this->load->view("layouts/client", "client/shoppage/shoppage", $data);
    }
}
