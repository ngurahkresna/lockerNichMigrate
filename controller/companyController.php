<?php

include_once("model/companyModel.php");

class companyController
{
    public function __construct()
    {
        $this->model = new companyModel();
    }

    public function index()
    {
        if (!isset($_SESSION)) session_start();
        $id = $_SESSION['id'];
        $result = $this->model->selectCompany($id);

        $_SESSION['companies'] = $result;
        include_once('views/company.php');
    }

    public function create()
    {
        include_once('views/createCompany.php');
    }

    public function store()
    {

        $param = $_POST;
        $fileName = $_FILES['logo']['name'];
        $size = $_FILES['logo']['size'];
        $file_temp = $_FILES['logo']['tmp_name'];

        move_uploaded_file($file_temp, 'assets/img/profilePitcure/' . $fileName);


        $param['logo'] = $fileName;
        $result = $this->model->createCompany($param);

        if ($result) {
            echo '<script>alert("Berhasil membuat company"); window.location="company";</script>';
        } else {
            echo '<script>alert("Gagal delete company"); window.location="company";</script>';
        }
    }

    public function show()
    {
        $id = $_GET['id'];

        $result = $this->model->selectOneCompany($id);

        $_SESSION['companies'] = $result;
        include_once('views/editCompany.php');
    }

    public function update()
    {
        $param = $_POST;

        $result = $this->model->editCompany($param);

        if ($result) {
            echo '<script>alert("Berhasil update artikel"); window.location="company"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.location="company"; </script>';
        }

    }

    public function destroy()
    {
        $param = $_GET['id'];
        $result = $this->model->deleteCompany($param);

        if ($result) {
            echo '<script>alert("Berhasil delete artikel"); window.location="company"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.location="company"; </script>';
        }
    }
}