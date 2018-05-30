<?php
include 'koneksi.php';
$actor_id = $_POST['actor_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$last_update = $_POST['last_update'];
mysqli_query($host,"UPDATE actor SET first_name='$first_name', last_name='$last_name',
last_update='$last_update' WHERE actor_id='$actor_id'");
header("location:index.php?pesan=update");
?>