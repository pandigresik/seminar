<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$email = $_POST['email'];
if (empty($nama)){
echo "<script>alert('Nama Anda belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else
if (empty($alamat)){
echo "<script>alert('Alamat Anda belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else 
if(empty($usia)){
echo "<script>alert('Usia Anda belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else 
if (empty($email)){
echo "<script>alert('Email Anda belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
$daftar = mysql_query("INSERT INTO user (id,nama,alamat,usia,email) values ('$nama','$alamat','$usia','$email')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=../'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>