<?php 
require 'functions.php';
$id = $_GET["id"];
$up = query("SELECT * FROM barang WHERE id = $id")[0];

if(isset($_POST["submit"])) {

	//cek data
	if(update($_POST) > 0) {
		echo "
			<script>
			alert('Berhasil diupdate!');
			document.location.href = 'toko.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Gagal diupdate!');
			document.location.href = 'toko.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
	<h1>Update data barang</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $up["id"]; ?>">
		<ul>
			<li>
				<label for="kode_barang">Kode Barang : </label>
				<input type="text" name="kode_barang" id="kode_barang"required value="<?= $up["kode_barang"]; ?>">
			</li>
			<li>
				<label for="nama_barang">Nama Barang : </label>
				<input type="text" name="nama_barang" id="nama_barang"required value="<?= $up["nama_barang"]; ?>">
			</li>
			<li>
				<label for="kategori">Kategori : </label>
				<input type="text" name="kategori" id="kategori"required value="<?= $up["kategori"]; ?>">
			</li>
			<li>
				<label for="jumlah_stok">Jumlah Stok : </label>
				<input type="text" name="jumlah_stok" id="jumlah_stok"required value="<?= $up["jumlah_stok"]; ?>">
			</li>
			<li>
				<label for="harga_satuan">Harga Satuan : </label>
				<input type="text" name="harga_satuan" id="harga_satuan"required value="<?= $up["harga_satuan"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Update data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>