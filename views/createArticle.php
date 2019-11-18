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
        <div class="col-8  mr-auto ml-auto">
            <div class="card">
                <div class="card-header">
                    <div class="cotainer">
                        <div class="row">
                            <div class="col-1 p-3">
                                <img class="avatar1" src="assets/img/avatar.jpg" alt="ava">
                            </div>
                            <div class="col-10 mt-4">
                                <h6>Nama User</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input type="text" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tulis Judul">
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <textarea class="form-control border-0" style="height: 400px" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan pesan disini..."></textarea>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <button type="button" class="btn btn-primary">Posting Artikel</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
