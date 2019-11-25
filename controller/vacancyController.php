<?php

include_once("model/vacancyModel.php");
include_once("model/companyModel.php");

class vacancyController
{
    public function __construct()
    {
        $this->vacancyModel = new vacancyModel();
        $this->companyModel = new companyModel();
    }

    public function index()
    {
        $result = $this->vacancyModel->selectVacancy();

        if (!isset($_SESSION)) session_start();

        $_SESSION['vacancy'] = $result;
        include_once('views/vacancy.php');
    }

    public function create()
    {
        $id = $_GET['id'];

        $result = $this->companyModel->selectOneCompany($id);
        $_SESSION['companies'] = $result;

        include_once('views/createVacancy.php');
    }

    public function store()
    {

        $param = $_POST;

        $result = $this->vacancyModel->createVacancy($param);

        if ($result) {
            echo '<script>alert("Berhasil membuat lowongan"); window.location="vacancy";</script>';
        } else {
            echo '<script>alert("Gagal membuat lowongan"); window.location="vacancy";</script>';
        }
    }

    public function show()
    {
        $id = $_GET['id'];

        $result = $this->vacancyModel->selectOneVacancy($id);

        if (!isset($_SESSION)) session_start();

        $_SESSION['vacancy'] = $result;
        include_once('views/editVacancy.php');
    }

    public function update()
    {
        $param = $_POST;

        $result = $this->vacancyModel->editVacancy($param);

        if ($result) {
            echo '<script>alert("Berhasil update lowongan"); window.location="vacancy";</script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }

    public function destroy()
    {
        $id = $_GET['id'];

        $result = $this->vacancyModel->deleteVacancy($id);

        if ($result) {
            echo '<script>alert("Berhasil delete lowongan"); window.location="vacancy"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }

    public function detail()
    {
        if (!isset($_SESSION)) session_start();

        $id = $_GET['id'];

        $result = $this->vacancyModel->selectOneVacancy($id);
        $_SESSION['vacancyDetail'] = $result;

        include_once('views/vacancyDetail.php');
    }
}