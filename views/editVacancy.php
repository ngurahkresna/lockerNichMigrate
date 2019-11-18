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
            <h1>Edit Data Lowongan</h1>
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <form >
                <div class="form-grup">

                    <label for="staticEmail" class="col-form-label">Perusahaan</label>

                    <input type="text" readonly class="form-control-plaintext mb-1 font-weight-bold" id="staticEmail"
                           value="Nama Anak Perusahaan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Lowongan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="UI/UX Engineer for Website, Analyze, etc">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Posisi</label>
                    <select class="form-control">
                        <option>Default select</option>
                        <option>Manager</option>
                        <option>Supervisor</option>
                        <option>Pegawai</option>
                        <option>Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Spesialisasi</label>
                    <select class="form-control">
                        <option>Semua Spesialisasi</option>
                        <option>Programmer</option>
                        <option>Bisnis Analis</option>
                        <option>Jaringan</option>
                        <option>Proyek Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Kerja</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Jakarta, bandung, etc.">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gaji</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="8000000 (example)">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Perbaharui</button>
            </form>
                <a href="deleteVacancy">
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </a>
            </div>
        </div>
    </div>
</div>