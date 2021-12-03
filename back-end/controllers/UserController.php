<?php
class UserController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
    }

    public function renderLoginForm()
    {
        $data = parent::baseRenderData();
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/login/login-form.css",
        ];
        $this->load->view("layouts/normalview", "account/login", $data);
    }

    public function renderRegisterForm()
    {
        $data = parent::baseRenderData();
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/register/register-form.css",
        ];
        $this->load->view("layouts/normalview", "account/register", $data);
    }

    public function register()
    {
        $user = $this->user->findUserByEmail($_POST["email"]);
        if ($user){
            backendAlert("Email account exists !!! Please re-enter another email account !!!",'/login');
        }else{
           
            if ($_POST["password"] == $_POST['rePassword']) {
                unset($_POST["rePassword"]);
              
                $this->user->register($_POST);
                // header("Location: /");
                header("Location: /login");
            }
        }  
    }
    public function login()
    {
        $user = $this->user->findUserByEmail($_POST["email"]);
        if ($user) {
            if($user['status'] == "Deactive"){
                backendAlert("Account is deactive !!!",'/login');
            }
            else if (password_verify($_POST["password"], $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["role"] = $user["role"];
                $_SESSION["logged"] = true;
                header("Location: /");
            }else{
                
                backendAlert("Incorrect password !!!",'/login');
            }
        }
        // header("Location: /"); 
        backendAlert("Account does not exist !!!",'/login');
    }

    public function logout()
    {
        $_SESSION["logged"] = false;
        session_destroy();
        header("Location: /");
    }

    public function changePassword()
    {
        debugAlert("Changing password");
        if ($_POST["newPwd"] === $_POST["confirmPwd"]){
            $user = $this->user->findUserById($_SESSION["user_id"]);
            if ($user && password_verify($_POST["currentPwd"], $user["password"])) {
                $_POST["id"] = $_SESSION["user_id"];
                $this->user->changePassword($_POST);
                backendAlert("Password changed successfully!");
            }
            else {
                // backendAlert("User validation error! Please try again.");
                backendAlert("Current password is incorrect !!");
            }
        }
        else {
            backendAlert("New password and confirmed password must match!");
        }
    }

    public function editProfile()
    { 
        debugAlert("Editing profile");
        debugAlert($_POST);
        $_POST["id"] = $_SESSION["user_id"];

        $_POST["image"] = $_FILES["image"]["name"];
        $this->user->editProfile($_POST);

        // $target = "images/" .basename($_FILES["image"]["name"]);
        $target = "public/images/uploadImage/" .basename($_FILES["image"]["name"]);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){ 
            debugAlert('success');
        }else{
            debugAlert('fail');
        }
        
        backendAlert("User profile edited successfully!");
    }

    public function switchActive()
    {
        $this->user->switchActive($_POST);
    }
}
