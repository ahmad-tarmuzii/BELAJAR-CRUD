<?php
include 'koneksi.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$last_update = $_POST['last_update'];
mysqli_query($host,"INSERT INTO actor
VALUES('','$first_name','$last_name','$last_update')");
header("location:index.php?pesan=input");
?>