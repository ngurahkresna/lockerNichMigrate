<?php

include_once("model/authModel.php");

class authController
{
    public function __construct()
    {
        $this->model = new authModel();
    }

    public function index()
    {
        include_once('views/login.php');
    }

    public function login()
    {
        $param = $_POST;

        $result = $this->model->login($param);

        if ($result) {
            header('Location: home');
        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.location="login"; </script>';
        }
    }

    public function register()
    {
        include_once('views/register.php');
    }

    public function registerProcess()
    {
        $param = $_POST;
        if ($param['password'] == $param['confirmPass']) {
            $result = $this->model->register($param);

            if ($result) {
                header('Location: login');
            } else {
                echo '<script>alert("' . $_SESSION['message'] . '")</script>';

            }
        } else {
            echo '<script>alert("Password not match!"); window.location="register"</script>';
        }


    }


    public function logout()
    {
        session_start();
        session_destroy();

        header('Location: home');
    }


}

?>