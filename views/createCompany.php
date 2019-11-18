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
            <form class="shadow-sm p-3 mb-5 bg-white rounded">
                <div class="form-grup mt-1">

                    <label for="staticEmail" class="col-form-label">Perusahaan</label>

                    <input type="text" class="form-control" id="exampleInputEmail1"
                           placeholder="PT Aplikasi Karya Anak Bangsa, UD, CV, etc.">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class=" mt-3">Product</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Gojek, Tokopedia, etc.">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Logo Perusahaan</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kota</label>
                    <select class="form-control">
                        <option>Input Alamat</option>
                        <option>Denpasar</option>
                        <option>Bogor</option>
                        <option>Jawa</option>
                        <option>Sumatera</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Your Address here.."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Information</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                              placeholder="Your information here.."></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>