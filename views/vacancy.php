<?php

$vacancies = $_SESSION['vacancy'];

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
        <?php foreach ($vacancies as $vacancy) { ?>
            <div class="col-10  mr-auto ml-auto">
                <div class="d-flex bd-highlight shadow-sm p-2 mb-3 bg-white rounded">
                    <div class="p-2 w-100 bd-highlight">
                        <h3><?= $vacancy['vacancyTitle'] ?></h3>
                        <h6><b><?= $vacancy['subsidiary'] ?></b> <?= $vacancy['companyName'] ?></h6>
                        <p style="margin: 0px;"><img src="assets/img/icon/location.svg" alt="location" height="16px;"
                                                     class="mr-1"> <?= $vacancy['location'] ?></p>
                        <p style="margin: 4px;"><img src="assets/img/icon/salary.svg" alt="location" height="16px;"
                                                     class="mr-1"><?= $vacancy['salary'] ?></p>
                        <p><?= $vacancy['information'] ?></p>
                    </div>
                    <div class="p-2 flex-shrink-1 bd-highlight align-middle text-center">
                        <img src="assets/img/profilePitcure/<?= $vacancy['logo'] ?>" alt="" width="150px">
                        <a href="vacancyDetail?id=<?= $vacancy['vacancyID'] ?>" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>