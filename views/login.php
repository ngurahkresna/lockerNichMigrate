<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Login</title>
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
                <h2>LOGIN</h2>
                <br>
                <div class="mb-5">
                    <form action="loginProcess" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name='password' id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                    </form>
                    <a href="register">
                        <button type="submit" class="btn btn-light mt-2"
                                style="background-color: #FFFFFF; border: none;">Buat akun baru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>