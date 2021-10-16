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
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/login/login-form.css",
        ];
        $this->load->view("layouts/client", "account/login", $data);
    }

    public function renderRegisterForm()
    {
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/register/register-form.css",
        ];
        $this->load->view("layouts/client", "account/register", $data);
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
            if ($user["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT, array("cost" => 12))) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["role"] = $user["role"];
                header("Location: /");
            }
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: /");
    }
}
