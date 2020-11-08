<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:data-seminar.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['tgl_lahir'],$_POST['email']);
 	header("location:../data-seminar.php");
 }
?>