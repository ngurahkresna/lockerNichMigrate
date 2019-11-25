<?php

$articles = $_SESSION['articles'];

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
<div class="container mt-5 mb-5">
    <div class="row">
        <?php foreach ($articles as $article) { ?>
            <div class="col-10 mr-auto ml-auto">
                <h1><?= $article['title'] ?></h1>
                <div class="media">
                    <img class="avatar1 mt-2" src="assets/img/avatar.jpg" alt="ava">
                    <div class="media-body ml-3">
                        <h5 class="mt-0"><?= $article['firstname'] ?></h5>
                        <p><?= $article['date'] ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <p><?= $article['content'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
