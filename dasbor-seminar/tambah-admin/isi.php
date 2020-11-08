<?php
include "koneksi.php";

$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$ha = $_POST["ha"];

$sql = "insert into admin (nama,username,password,ha) values ('$nama','$username','$password','$ha')";
mysql_query($sql);

echo "<meta http-equiv='refresh' content='0;url=../data-admin.php'>";
?>