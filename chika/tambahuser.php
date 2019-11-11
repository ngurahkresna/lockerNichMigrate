<?php
$pencaharian = $_POST['pencaharian'];


$conn = mysqli_connect("localhost","root","","lockernichsearch");

$query = "INSERT INTO table_search VALUES('','$pencaharian')";

mysqli_query($conn,$query);

header('Location: http://localhost/lockerNichMigrate/chika/table.php');

?>