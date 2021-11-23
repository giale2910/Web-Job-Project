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
        if ($_POST["password"] == $_POST['rePassword']) {
            unset($_POST["rePassword"]);
            $this->user->register($_POST);
            header("Location: /");
        }
    }
    public function login()
    {
        $user = $this->user->findUserByEmail($_POST["email"]);
        if ($user) {
            if (password_verify($_POST["password"], $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["role"] = $user["role"];
                $_SESSION["logged"] = true;
                header("Location: /");
            }
        }
        header("Location: /");
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
                backendAlert("User validation error! Please try again.");
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
        $this->user->editProfile($_POST);
        backendAlert("User profile edited successfully!");
    }

    public function switchActive()
    {
        $this->user->switchActive($_POST);
    }
}
