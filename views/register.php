<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Register</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<div class="authBg">
    <div class="content1">
        <p>Welcome To</p>
        <p><strong>LockerNich</strong></p>
    </div>
</div>

<div class="content2">

    <div class="container">
        <div class="row">
            <div class="col-10 mr-auto ml-auto mt-5">
                <h2>REGISTRASI</h2>
                <br>
                <div class="mb-5">
                    <form action="registerProcess" method="post">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Depan</label>
                            <input type="text" class="form-control" name="fName" id="formGroupExampleInput"
                                   placeholder="Nama Depan">
                            <label for="formGroupExampleInput" class="mt-3">Nama Belakang</label>
                            <input type="text" class="form-control" name="lName" id="formGroupExampleInput" placeholder="Nama Belakang">
                            <label for="exampleInputEmail1" class="mt-3">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                   placeholder="Password">
                            <label for="exampleInputPassword1" class="mt-3">Re-Type Password</label>
                            <input type="password" class="form-control" name="confirmPass" id="exampleInputPassword1"
                                   placeholder="Re-Type Password">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Registration</button>
                    </form>
                    <a href="login">
                        <button type="submit" class="btn btn-light mt-2"
                                style="background-color: #FFFFFF; border: none;">Sudah memiliki akun
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>