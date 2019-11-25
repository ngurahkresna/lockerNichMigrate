<?php

$vacancy = $_SESSION['vacancyDetail'];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Detail Lowongan</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mr-auto ml-auto shadow-sm p-3 bg-white rounded">
            <div class="media position-relative">
                <img src="assets/img/companyLogo.png" class="mr-5" alt="..." width="150px">
                <div class="media-body ml-5 mt-3 align-center">
                    <h5><b><?= $vacancy['subsidiary'] ?></b></h5>
                    <h6><?= $vacancy['companyName'] ?></h6>
                    <p><img src="assets/img/icon/location.svg" alt="location" height="16px;"
                            class="mr-1"><?= $vacancy['city'] ?>, <?= $vacancy['address'] ?></p>
                </div>
<!--                --><?php //if ($_SESSION['id'] == ) {?>
                <div class="media-body ml-5 mt-3 align-center">
                    <form action="editVacancy?id=<?= $vacancy['vacancyID']?>" method="post">
<!--                        <input type="hidden" name="id" value="--><?//= $vacancy['vacancyID'] ?><!--">-->
                        <button type="submit" class="btn btn-primary mb-3" style="width: 140px;">Edit</button>
                    </form>
                    <form action="deleteVacancy?id=<?= $vacancy['vacancyID']?>" method="post">
<!--                        <input type="hidden" name="id" value="--><?//= $vacancy['vacancyID'] ?><!--">-->
                        <button type="submit" class="btn btn-danger" style="width: 140px;">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h1 class="mt-4"><?= $vacancy['vacancyTitle'] ?></h1>
            <div class="align-middle">
                <div class="contaier">
                    <div class="row">
                        <div class="col">
                            <p style="margin: 4px;">
                                <img src="assets/img/icon/salary.svg" alt="salarry" height="16px;"
                                     class="mr-1"><?= $vacancy['salary'] ?>
                            </p>
                        </div>
                        <div class="col">
                            <p style="margin: 4px;">
                                <img src="assets/img/icon/position.svg" alt="position" height="16px;"
                                     class="mr-1"><?= $vacancy['position'] ?>
                            </p>
                        </div>
                        <div class="col">
                            <p style="margin: 4px;">
                                <img src="assets/img/icon/specialization.svg" alt="specialization" height="16px;"
                                     class="mr-2"><?= $vacancy['specialization'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h3 class="mt-3">Deskripsi Pekerjaan</h3>
            <p><?= $vacancy['information'] ?></p>
        </div>
        <div class="col-6">
            <h3 class="mt-3">Lokasi Kerja</h3>
            <p style="margin: 4px;"><img src="assets/img/icon/location.svg" alt="location" height="16px;"
                                         class="mr-1"><?= $vacancy['location'] ?>
            </p>
            <h3 class="mt-3">Gallery</h3>
            <div class="contaier">
                <div class="row">
                    <div class="col text-center">
                        <p style="margin: 4px;"><img src="assets/img/companyLogo.png" alt="location" height="100px;">
                    </div>
                    <div class="col text-center">
                        <p style="margin: 4px;"><img src="assets/img/companyLogo.png" alt="location" height="100px;">
                    </div>
                    <div class="col text-center">
                        <p style="margin: 4px;"><img src="assets/img/companyLogo.png" alt="location" height="100px;">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6  mb-5">
            <h3 class="mt-3">Informasi Perusahaan</h3>
            <p><?= $vacancy['companyInfo'] ?></p>
        </div>
    </div>
</div>

</body>
</html>