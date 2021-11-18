<?php
class AdminController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderManagerManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManageManager";
  
        $data["jsFiles"] = [
            
        ];
        $this->load->view("layouts/admin", "admin/manage-manager/manage-manager", $data);
    }

    public function renderUserManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManageUser";
       
        $data["jsFiles"] = [
            
        ];
        $this->load->view("layouts/admin", "admin/manage-user/manage-user", $data);
    }
    public function renderChangePassword()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ChangePassword";
        $this->load->view("layouts/admin", "account/changePassword", $data);
    }

}
