<?php
$pendidikan = $_POST['pendidikan'];
$bidang = $_POST['bidang'];
$lokasi = $_POST['lokasi'];
$gaji = $_POST['gaji'];

$conn = mysqli_connect("localhost","root","","db_locker");

$query = "INSERT INTO user_data VALUES('','$pendidikan','$bidang','$lokasi','$gaji')";

mysqli_query($conn,$query);

header('Location: http://localhost/lockernich/table.php');

?>