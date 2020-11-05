<?php 
$conn = mysqli_connect("localhost", "root", "", "toko");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_array($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	$kode_barang = htmlspecialchars($data["kode_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$kategori = htmlspecialchars($data["kategori"]);
	$jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
	$harga_satuan = htmlspecialchars($data["harga_satuan"]);

	//insert data
	$query = "INSERT INTO barang VALUES ('$kode_barang','$nama_barang','$kategori','$jumlah_stok','$harga_satuan','')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function update($data) {
	global $conn;
	$id = $data["id"];
	$kode_barang = htmlspecialchars($data["kode_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$kategori = htmlspecialchars($data["kategori"]);
	$jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
	$harga_satuan = htmlspecialchars($data["harga_satuan"]);

	//insert data
	$query = "UPDATE barang SET 
				kode_barang = '$kode_barang',
				nama_barang = '$nama_barang',
				kategori = '$kategori',
				jumlah_stok = $jumlah_stok,
				harga_satuan = $harga_satuan 

				WHERE id = $id
				";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function cari ($search) {
	$query = "SELECT * FROM barang WHERE 
	kategori LIKE '%$search%'
	OR kode_barang LIKE '%$search%'
	OR nama_barang LIKE '%$search%' ";
	return query($query);
}
?>