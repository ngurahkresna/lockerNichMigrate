<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Edit Profile</title>
</head>
<body>
<?php include_once('navbar.php') ?>
<div class="container">
    <div class="row">
        <div class="col-8 mr-auto ml-auto mt-5">
            <h2>Edit Profile</h2>
            <br>
            <div class="mb-5">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Depan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                               placeholder="Nama Depan">
                        <label for="formGroupExampleInput" class="mt-3">Nama Belakang</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang">
                        <label for="exampleInputEmail1" class="mt-3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                        <label for="exampleInputPassword1" class="mt-3">Re-Type Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Re-Type Password">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Profile</button>
                </form>
                <a href="deleteaccount">
                    <button type="button" class="btn btn-danger mt-3">Delete Account</button>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>