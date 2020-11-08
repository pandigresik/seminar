<?php
include "koneksi.php";

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tgl_lahir = $_POST["tgl_lahir"];
$email = $_POST["email"];

$sql = "insert into user (nama,alamat,tgl_lahir,email) values ('$nama','$alamat','$tgl_lahir','$email')";
mysql_query($sql);

echo "<meta http-equiv='refresh' content='0;url=../data-seminar.php'>";
?>