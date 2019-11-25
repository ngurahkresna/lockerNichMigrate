<?php

include_once("model/forumModel.php");

class forumController
{
    public function __construct()
    {
        $this->model = new forumModel();
    }

    public function index()
    {
        $result = $this->model->selectPost();

        if (!isset($_SESSION)) session_start();

        $_SESSION['forums'] = $result;
        include_once('views/post.php');
    }

    public function create()
    {
        include_once('views/createPost.php');
    }

    public function store()
    {
        if (!isset($_SESSION)) session_start();

        $param = $_POST;

        $result = $this->model->createPost($param);

        if ($result) {
            echo '<script>alert("Berhasil membuat postingan"); window.location="post"; </script>';
        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }

    public function show()
    {
        if (!isset($_SESSION)) session_start();

        $id = $_GET['id'];

        $result = $this->model->selectOnePost($id);

        $_SESSION['post'] = $result;
        include_once('views/editPost.php');
    }

    public function update()
    {
        $param = $_POST;

        $result = $this->model->editPost($param);

        if ($result) {
            echo '<script>alert("Berhasil update postingan"); window.location="post"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }

    }

    public function destroy()
    {
        $id = $_GET['id'];

        $result = $this->model->deletePost($id);

        if ($result) {
            echo '<script>alert("Berhasil delete postingan"); window.location="post"; </script>';

        } else {
            echo '<script>alert("' . $_SESSION['message'] . '"); window.history.back(); </script>';
        }
    }
}