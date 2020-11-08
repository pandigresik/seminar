<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_user']);
	header("location:../data-admin.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_user'],$_POST['nama'],$_POST['username'],$_POST['password']);
 	header("location:../data-admin.php");
 }
?>