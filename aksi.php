<?php 
include 'koneksi.php';



$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$event=$_POST['event'];
//mysqli_query("insert into peserta values('','$nama','$email','$hp','$event')");

mysqli_query($koneksi,"insert into peserta values(NULL,'$nama','$email','$hp','$event');");
//var_dump($_POST);

//mysqli_query($koneksi,"insert into user values(NULL,'$nama','alamat','pekerjaan')");
?>