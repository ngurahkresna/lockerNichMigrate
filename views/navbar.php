<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <title>LockerNich</title>
</head>
<body>

<?php if (!isset($_SESSION['id']))  { ?>
<nav class="navbar navbar-light bg-light">
    <a href="/LockerNichMigrate" class="navbar-brand">
        <img src="assets/img/Logo.png" width="30" height="30" class="ml-5 d-inline-block align-top" alt="logo">
        LockerNich </a>
    <form class="form-inline">
        <a href="login" class="nav-item nav-link active">Login</a>
        <a href="register" class="nav-item nav-link active mr-5">Register</a>
    </form>
</nav>
<?php } else { ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/LockerNichMigrate/">
        <img src="assets/img/Logo.png" width="30" height="30" class="ml-5 d-inline-block align-top" alt="logo">
        LockerNich
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <div class="form-inline">
            <a href="company" class="nav-item nav-link">Tambah Lowongan</a>
            <a href="vacancy" class="nav-item nav-link">Cari Lowongan</a>
            <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Hi, Dummy</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="editProfile">Edit Profile</a>
                            <a class="dropdown-item" href="logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php } ?>
</body>
</html>
