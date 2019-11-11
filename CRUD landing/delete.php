<?php
$id = $_POST['delete'];

$conn = mysqli_connect("localhost","root","","db_locker");

$query = "DELETE FROM `user_data` WHERE `id`='$id'";

mysqli_query($conn,$query);

header('Location: http://localhost/lockernich/table.php');

?>