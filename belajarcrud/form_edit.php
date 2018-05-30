<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>

    <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	

	<!--FOOTER-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="#"><i class="fas fa-cart-plus fa-2x">&nbsp;&nbsp;</i><b>DATABASE ACTOR</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
		<div class="p-3 mb-2 bg-light text-dark">
		<div>
			<h1></h1>
		</div>
<div class="judul">
<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
<h2>Menampilkan data dari database</h2>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$actor_id = $_GET['actor_id'];
$query_mysql = mysqli_query($host,"SELECT * FROM actor WHERE
actor_id='$actor_id'")or die(mysqli_error());
while($data = mysqli_fetch_array($query_mysql)){
?>
<form action="simpan_edit.php" method="post">
<table>
<tr>
<td>
<input type="hidden" name="actor_id" value="<?php echo
$data['actor_id'] ?>">
</td>
</tr>
<tr>
<td>Nama Depan</td>
<td>
<input type="text" name="first_name" value="<?php echo
$data['first_name'] ?>">
</td>
</tr>
<tr>
<td>Nama Belakang</td>
<td>
<input type="text" name="last_name" value="<?php echo
$data['last_name'] ?>">
</td>
</tr>
<tr>
<td>Terakhir Diubah</td>
<td><input type="text" name="last_update" value="<?php
echo $data['last_update'] ?>"></td>
</tr>
<tr>
<td></td>
<td>
	<script type="text/javascript" C>
		function muncul()
		{
		alert ("Berhasil Disimpan");
		}
	</script>
	<input type="submit" value="Simpan" onclick="muncul()">
</td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>