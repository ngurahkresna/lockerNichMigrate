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
        <div class="col-8 mr-auto ml-auto">
            <h1>Input Data Perusahaan</h1>
            <form action="createCompanyProcess" method="post" class="shadow-sm p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
                <div class="form-grup mt-1">

                    <label for="staticEmail" class="col-form-label">Perusahaan</label>
                    <input type="hidden" name="userID" value="<?= $_SESSION['id'] ?>">
                    <input type="text" class="form-control" name="company" id="exampleInputEmail1"
                           placeholder="PT Aplikasi Karya Anak Bangsa, UD, CV, etc." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class=" mt-3">Product</label>
                    <input type="text" class="form-control" name="subsidiary" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Gojek, Tokopedia, etc."required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Logo Perusahaan</label>
                    <input type="file" class="form-control-file" name="logo" id="exampleFormControlFile1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota</label>
                    <select class="form-control" name="city"required>
                        <option>Input Alamat</option>
                        <option>Denpasar</option>
                        <option>Bogor</option>
                        <option>Jawa</option>
                        <option>Sumatera</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Your Address here.." required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Information</label>
                    <textarea class="form-control" name="information" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Your information here.." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>