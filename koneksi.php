<?php 
 
$koneksi = mysqli_connect("localhost","root","wibowo23","db_event");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>