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

    public function create()
    {
//        nothingToDo
    }

    public function store()
    {
//        nothingToDo
    }

    public function show()
    {
        include_once('views/editProfile.php');
    }

    public function update()
    {
        session_start();
        $param = $_POST;
        $param['id'] = $_SESSION['id'];

        $result = $this->model->updateProfile($param);

        if ($result) {
            echo '<script>alert("Berhasil Update Profile"); window.location="editProfile";</script>';
        } else {
            echo '<script>alert("' . $_SESSION['message'] . '");  window.location="editProfile";</script>';
        }
    }

    public function destroy()
    {
        if (!isset($_SESSION)) session_start();
        $id = $_SESSION['id'];
        $result = $this->model->delete($id);

        if ($result) {
            echo '<script>alert("Berhasil delete akun"); window.location="home";</script>';
            session_start();
            session_destroy();
        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.location="home";</script>';
        }
    }
}

?>