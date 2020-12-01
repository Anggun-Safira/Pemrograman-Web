<?php
require 'functions.php';
$barang = query("SELECT * FROM barang");

if(isset($_POST["cari"])) {
	$barang = cari($_POST["search"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko Pak Adi</title>
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
	<h1>Stok Barang</h1>

	<a href="tambah.php">Tambah data barang</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="search" placeholder="masukkan data yang dicari" size="30" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
		
	</form>
	<br><br>

	<form action="" method="post">
		<select name="pilih">
		<option value="1">Harga Tertinggi</option>
		<option value="2">Harga Terendah</option>
		</select>
		<input type="submit" name="cek" value="Cek"></input>
	</form>
	<br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Aksi</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Jumlah Stok</th>
			<th>Harga Satuan</th>

                    <?php $i = 1; ?>
                    <?php foreach ($barang as $row) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="update.php?id= <?= $row["id"]; ?>">update</a> |
                            <a href="hapus.php?id= <?= $row["id"]; ?>">delete</a>
                        </td>
                        <td><?= $row["kode_barang"]; ?></td>
                        <td><?= $row["nama_barang"]; ?></td>
                        <td><?= $row["kategori"]; ?></td>
                        <td><?= $row["jumlah_stok"]; ?></td>
                        <td><?= $row["harga_satuan"]; ?></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
			<td></td>
		</tr>
	</table>

</body>
</html>