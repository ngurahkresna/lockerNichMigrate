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
                <form method="post" action="editProfileProcess">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Depan</label>
                        <input type="text" class="form-control" name="fName" id="formGroupExampleInput"
                               placeholder="Nama Depan" value="<?= $_SESSION['fName'] ?>" required>
                        <label for="formGroupExampleInput" class="mt-3">Nama Belakang</label>
                        <input type="text" class="form-control" name="lName" id="formGroupExampleInput"
                               placeholder="Nama Belakang" value="<?= $_SESSION['lName'] ?>" required>
                        <label for="exampleInputEmail1" class="mt-3">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                               value="<?= $_SESSION['email'] ?>"
                               aria-describedby="emailHelp"
                               placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                               placeholder="Password" required>
                        <label for="exampleInputPassword1" class="mt-3">Re-Type Password</label>
                        <input type="password" class="form-control" name="rePass" id="exampleInputPassword1"
                               placeholder="Re-Type Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Profile</button>
                </form>
                <a href="deleteAccount">
                    <button type="button" class="btn btn-danger mt-3">Delete Account</button>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>