<?php
require '../functions.php';
$search = $_GET["search"];
$query = "SELECT * FROM barang WHERE 
		kategori LIKE '%$search%'
		OR kode_barang LIKE '%$search%'
		OR nama_barang LIKE '%$search%' ";
$barang = query($query);

?>
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