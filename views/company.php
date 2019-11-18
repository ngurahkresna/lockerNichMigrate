<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Tambah Lowongan</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<!--<div class="container">-->
<!--    <div class="row mt-5">-->
<!--        <div class="col-4">-->
<!--            <img src="assets/img/empty.svg" alt="empty" width="300px;">-->
<!--        </div>-->
<!--        <div class="col mt-3">-->
<!--            <h2>Belum ada perusahaan, Silahkan tambah perusahaan sebelum menambahkan lowongan pekerjaan</h2>-->
<!--            <div class="mt-5">-->
<!--                <a href="createCompany">-->
<!--                    <button type="button" class="btn-primary highlightButton " style="border: none;">Tambah Perusahaan-->
<!--                    </button>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="container">
    <div class="row">
        <div class="col-12 m-5">
            <h1>Daftar Perusahaan</h1>
        </div>
        <div class="col">

            <div class="card mr-auto ml-auto mb-5" style="width: 300px; padding: 8px;">

                <img class="card-img-top" src="assets/img/companyLogo.png" alt="Card image cap">

                <div class="card-body" style="margin-bottom: -24px">
                    <h4 class="card-title"><b>Adidas</b></h4>
                    <p class="card-text">
                    <h5>Daftar Lowongan</h5>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Tambah Lowongan</a>
                </div>
            </div>
        </div>

        <div class="col">

            <div class="card mr-auto ml-auto " style="width: 300px; padding: 8px;">

                <img class="card-img-top" src="assets/img/companyLogo.png" alt="Card image cap">

                <div class="card-body" style="margin-bottom: -24px">
                    <h4 class="card-title"><b>Adidas</b></h4>
                    <p class="card-text">
                    <h5>Daftar Lowongan</h5>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Tambah Lowongan</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card"
                 style="border-radius: 4px; border: 1px solid grey; width: 300px; opacity: 20%; padding: 4px;">
                <table style="height: 300px;">
                    <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <a href="#">
                                <img src="assets/img/icon/plus.svg" alt="plus" width="72px">
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</body>
</html>