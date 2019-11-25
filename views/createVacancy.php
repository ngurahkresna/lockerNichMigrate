<?php

$companies = $_SESSION['companies'];

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
        <div class="col-8 mr-auto ml-auto">
            <h1>Buat Lowongan Kerja Baru</h1>
            <form class="shadow-sm p-3 mb-5 bg-white rounded" method="post" action="createVacancyProcess">
                <div class="form-grup mt-1">

                    <label for="staticEmail" class="col-form-label">Perusahaan</label>
                    <input type="hidden" name="companyID" value="<?= $companies['companyID'] ?>">
                    <input type="text" readonly class="form-control-plaintext mb-1 font-weight-bold" name="subsidiary"
                           id="staticEmail"
                           value="<?= $companies['subsidiary'] ?> ">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Lowongan</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="UI/UX Engineer for Website, Analyze, etc" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Posisi</label>
                    <select class="form-control" name="position" required>
                        <option>Default select</option>
                        <option>Manager</option>
                        <option>Supervisor</option>
                        <option>Pegawai</option>
                        <option>Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Spesialisasi</label>
                    <select class="form-control" name="specialization" required>
                        <option>Semua Spesialisasi</option>
                        <option>Programmer</option>
                        <option>Bisnis Analis</option>
                        <option>Jaringan</option>
                        <option>Proyek Manager</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Kerja</label>
                    <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Jakarta, bandung, etc." required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gaji</label>
                    <input type="number" class="form-control" name="salary" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="8000000 (example)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Informasi Lowongan</label>
                    <textarea class="form-control" name="information" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>