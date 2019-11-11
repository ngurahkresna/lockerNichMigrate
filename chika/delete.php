<?php
$id = $_POST['delete'];

$conn = mysqli_connect("localhost","root","","lockernichsearch");

$query = "DELETE FROM `table_search` WHERE `id`='$id'";

mysqli_query($conn,$query);

header('Location: http://localhost/lockerNichMigrate/chika/table.php');

?>