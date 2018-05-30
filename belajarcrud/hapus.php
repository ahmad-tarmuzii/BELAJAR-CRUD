<?php
include 'koneksi.php';
$actor_id = $_GET['actor_id'];
mysqli_query($host,"DELETE FROM actor WHERE actor_id='$actor_id'")or
die(mysqli_error());
header("location:index.php?pesan=hapus");
?>