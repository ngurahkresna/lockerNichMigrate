<?php
$id = $_GET['id'];
$pendidikan = $_POST['pendidikan'];
$bidang = $_POST['bidang'];
$lokasi = $_POST['lokasi'];
$gaji = $_POST['gaji'];

$conn = mysqli_connect("localhost","root","","db_locker");

$query = "UPDATE `user_data` SET `pendidikan`='$pendidikan',`bidang`='$bidang',`lokasi`='$lokasi',`gaji`='$gaji' WHERE `id`='$id'";

mysqli_query($conn,$query);

header('Location: http://localhost/lockernich/table.php');

?>