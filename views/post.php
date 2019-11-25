<?php

$posts = $_SESSION['forums'];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Daftar Lowongan</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<div class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post) { ?>
        <div class="col-8  mr-auto ml-auto mb-5">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-0">
                                    <img class="avatar1" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-8">
                                    <h6 class="mt-2"><?= $post['firstName'] ?></h6>
                                </div>
                                <?php if ($post['userID'] == $_SESSION['id']) { ?>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle mt-1 float-right"
                                                style="background-color: white; border: none; color: black"
                                                type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Menu
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               href="editPost?id=<?= $post['id'] ?>">Edit</a>
                                            <a class="dropdown-item"
                                               href="deletePost?id=<?= $post['id'] ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3> <?= $post['title'] ?> </h3>
                    </li>
                    <li class="list-group-item">
                        <p> <?= $post['description'] ?> </p>
                    </li>
                    <li class="list-group-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-2 ">
                                    <img class="avatar1 ml-5" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-10">
                                    <h6 class="mt-2">Nama User</h6>
                                </div>

                                <div class="col-2">

                                </div>
                                <div class="col-10">
                                    <p>Comment...</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-2 ">
                                    <img class="avatar1 ml-5" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-10">
                                    <h6 class="mt-2">Nama User</h6>
                                </div>

                                <div class="col-2">

                                </div>
                                <div class="col-10">
                                    <p>Comment...</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>