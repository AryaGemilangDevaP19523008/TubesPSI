<?php 
$conn = mysqli_connect("localhost", "root", "", "dealerku");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$hari = htmlspecialchars($data["hari"]);
	$tanggal = date($data["tanggal"]);
	$merk = htmlspecialchars($data["merk"]);
	$tipe = htmlspecialchars($data["tipe"]);
	$seri = htmlspecialchars($data["seri"]);
	$namaPem = htmlspecialchars($data["namaPem"]);
	$noHP = htmlspecialchars($data["noHP"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$harga = intval($data["harga"]);


	$query = "INSERT INTO penjualan
				VALUES
			('', '$hari', '$tanggal', '$merk', '$tipe', '$seri', '$namaPem', '$noHP', '$alamat', '$harga')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahAkun($data) {
	global $conn;

	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);

	$query = "INSERT INTO akun
				VALUES
				('', '$username', '$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


?>