<?php 
require 'functions.php';
if(isset($_POST["submit"])) {

	//cek data
	if(tambah($_POST) > 0) {
		echo "
			<script>
			alert('Berhasil ditambahkan!');
			document.location.href = 'toko.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Gagal ditambahkan!');
			document.location.href = 'toko.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
	<h1>Tambah data barang</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="kode_barang">Kode Barang : </label>
				<input type="text" name="kode_barang" id="kode_barang"required>
			</li>
			<li>
				<label for="nama_barang">Nama Barang : </label>
				<input type="text" name="nama_barang" id="nama_barang"required>
			</li>
			<li>
				<label for="kategori">Kategori : </label>
				<input type="text" name="kategori" id="kategori"required>
			</li>
			<li>
				<label for="jumlah_stok">Jumlah Stok : </label>
				<input type="text" name="jumlah_stok" id="jumlah_stok"required>
			</li>
			<li>
				<label for="harga_satuan">Harga Satuan : </label>
				<input type="text" name="harga_satuan" id="harga_satuan"required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>