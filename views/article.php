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
    <title>Artikel</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<div class="container mt-5 mb-5">
    <div class="row">
        <?php foreach ($articles as $article) { ?>
            <div class="col-10  mr-auto ml-auto">
                <div class="d-flex bd-highlight shadow-sm p-2 mb-3 bg-white rounded">
                    <div class="p-2 w-100 bd-highlight">
                        <div class="container">
                            <div class="row">
                                <div class="col-1 p-3">
                                    <img class="avatar1" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-8">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8">
                                                <h5><?= $article['firstname'] ?></h5>
                                            </div>
                                            <div class="col-12">
                                                <p><?= $article['date'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="detailArticle" method="get">
                                                    <input type="hidden" name="id" value="<?= $article['id'] ?>">
                                                    <button type="submit" class="btn btn-primary ml-4"
                                                            style="height: 30px; width: 112px; font-size: 12px">Detail
                                                    </button>
                                                </form>
                                            </div>
                                            <?php if ($article['userID'] == $_SESSION['id']) { ?>
                                                <div class="col-12">
                                                    <form action="editArticle" method="GET">
                                                        <input type="hidden" name="id" value="<?= $article['id'] ?>">
                                                        <button type="submit" class="btn btn-link"
                                                                style="font-size: 12px;">edit
                                                        </button>
                                                    </form>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr style="margin: 4px">
                        <h3 class="mt-3"><b><?= $article['title'] ?></b></h3>
                        <p><?= substr($article['content'], 0, 364) . "....<br>" ?></p>
                    </div>
                  </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
