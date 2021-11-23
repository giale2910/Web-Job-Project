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
        $data["users"] = $this->user->getAllManagers();
        $this->load->view("layouts/admin", "admin/manage-manager", $data);
    }

    public function renderUserManagement()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ManageUser";
       
        $data["jsFiles"] = [
            
        ];
        $data["users"] = $this->user->getAllUsers();
        $this->load->view("layouts/admin", "admin/manage-user", $data);
    }
    public function renderChangePassword()
    {
        $data = parent::baseRenderData();
        $data["title"] = "ChangePassword";
        $this->load->view("layouts/admin", "account/changePassword", $data);
    }

}
