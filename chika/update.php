<?php
$id = $_GET['id'];
$pencaharian = $_POST['pencaharian'];


$conn = mysqli_connect("localhost","root","","lockernichsearch");

$query = "UPDATE `table_search` SET `pencaharian`='$pencaharian' WHERE `id`='$id'";

mysqli_query($conn,$query);

header('Location: http://localhost/lockerNichMigrate/chika/table.php');

?>