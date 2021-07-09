<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","root","","dealerku");
$sqlQuery = "SELECT ID, merk, COUNT(merk) 'totalPen' FROM penjualan GROUP BY merk";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>