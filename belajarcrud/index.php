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

<div class="container border" style="background-color: white">
	<br>
	<h3>Data Actor</h3><br>
	<a class="tombol btn btn-outline-info" href="form_input.php"><i class="fas fa-plus">&nbsp;&nbsp;</i>Tambah Data</a>
	<br><br>
	

		<table class="table table-bordered" style="text-align: center;">
			<thead class="thead-light">
		        <tr>
		          <th scope="col">Id. Aktor</th>
		          <th scope="col">Nama Depan</th>
		          <th scope="col">Nama Belakang</th>
		          <th scope="col">Terakhir Diubah</th>
		          <th scope="col">Opsi</th>
		        </tr>
	      	</thead>
		
		<?php
		include "koneksi.php";
		$query_mysql = mysqli_query($host,"SELECT * FROM actor")or
		die(mysqli_error($host));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
			<tbody>
				<tr>
					<td><?php echo $data['actor_id']; ?></td>
					<td><?php echo $data['first_name']; ?></td>
					<td><?php echo $data['last_name']; ?></td>
					<td><?php echo $data['last_update']; ?></td>
					<td>
						<script type="text/javascript" C>
						function muncul()
						{
								alert ("Berhasil Dihapus");
						}
						</script>

						<a href="form_edit.php?actor_id=<?php echo $data['actor_id'];?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
						<a href="hapus.php?actor_id=<?php echo $data['actor_id'];?>"><button type="button" class="btn btn-danger bg-danger" onclick="muncul()"><i class="fas fa-trash"></i></button></a></td>
				</tr>
			</tbody>
		<?php } ?>
		</table>

</div>

<div align="center">
      <br><br>
      <h6>Design By Lalu Atasaldi</h6>
      <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="#"><i class="fab fa-git fa-2x"></i></a>
      <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
</div>
</div>

      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>