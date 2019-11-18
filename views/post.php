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
<div class="container mt-5">
    <div class="row">
        <div class="col-8  mr-auto ml-auto">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-0">
                                    <img class="avatar1" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-8">
                                    <h6 class="mt-2">Nama User</h6>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle mt-1 float-right"
                                                style="background-color: white; border: none; color: black"
                                                type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Menu</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="editPost">Edit</a>
                                            <a class="dropdown-item" href="deletePost">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet ex sodales, aliquet leo
                            vel, laoreet dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                            ac turpis egestas. Sed ornare fringilla ipsum, at egestas metus elementum at. Aenean
                            sagittis rhoncus sem a volutpat. Sed porttitor commodo justo nec dictum. Aliquam diam lacus,
                            consectetur et nisl eget, porta tempus nibh. Etiam sed mollis orci, in scelerisque nulla.
                            Nam tortor dui, sagittis sit amet posuere non, interdum ut est. Mauris dignissim auctor
                            mauris eu porta. Sed ornare leo neque, eget imperdiet urna volutpat nec. Vivamus at mattis
                            diam.
                        </p>
                    </li>
                    <li class="list-group-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-2 ">
                                    <img class="avatar1 ml-5" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-10">
                                    <h6 class="mt-2">Nama User</h6>
                                </div>

                                <div class="col-2">

                                </div>
                                <div class="col-10">
                                    <p>Comment...</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-2 ">
                                    <img class="avatar1 ml-5" src="assets/img/avatar.jpg" alt="ava">
                                </div>
                                <div class="col-10">
                                    <h6 class="mt-2">Nama User</h6>
                                </div>

                                <div class="col-2">

                                </div>
                                <div class="col-10">
                                    <p>Comment...</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>