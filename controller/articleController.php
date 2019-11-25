<?php

include_once("model/articleModel.php");

class articleController
{
    public function __construct()
    {
        $this->model = new articleModel();
    }

    public function index()
    {
        if (!isset($_SESSION)) session_start();

        $result = $this->model->selectArticle();

        $_SESSION['articles'] = $result;
        include_once('views/article.php');
    }

    public function create()
    {
        include_once('views/createArticle.php');
    }

    public function store()
    {
        $param = $_POST;

        $result = $this->model->createArticle($param);

        if ($result) {
            echo '<script>alert("Berhasil membuat artikel"); window.location="article"; </script>';
        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.location="article"; </script>';
        }
    }

    public function show()
    {
        if (!isset($_SESSION)) session_start();

        $id = $_GET['id'];

        $result = $this->model->detailArticle($id);
        $_SESSION['articles'] = $result;

        include_once('views/editArticle.php');
    }

    public function update()
    {
        $param = $_POST;

        $result = $this->model->editArticle($param);

        if ($result) {
            echo '<script>alert("Berhasil update artikel"); window.location="article" </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }

    public function destroy()
    {
        $param = $_POST;
        $result = $this->model->deleteArticle($param);

        if ($result) {
            echo '<script>alert("Berhasil delete artikel"); window.location="article"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }

    public function detail()
    {
        if (!isset($_SESSION)) session_start();

        $id = $_GET['id'];

        $result = $this->model->detailArticle($id);
        $_SESSION['articles'] = $result;

        include_once('views/detailarticle.php');

    }

}
