<link rel="stylesheet" href="admin.css">

<?php
include '../config.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM cars WHERE id=$id");
header("Location: cars_manage.php");
?>
