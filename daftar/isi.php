<?php
include "../koneksi.php";

$nama = $_POST["nama"];
$npa = $_POST["npa"];
$alamat = $_POST["alamat"];
$tgl_lahir = $_POST["tgl_lahir"];
$email = $_POST["email"];
$sekolah = $_POST["sekolah"];
$sudahInput = "select npa from user where npa = '{$npa}'";
$resultQuery = mysql_query($sudahInput);
$ada = mysql_num_rows($resultQuery);

if(!$ada){
    $sql = "insert into user (npa,nama,alamat,tgl_lahir,email,sekolah) values ('$npa','$nama','$alamat','$tgl_lahir','$email','$sekolah')";
    mysql_query($sql);
    echo "<script>alert('Terima kasih, Anda Sudah Terdaftar. Silahkan menunggu pengumuman dari admin.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}else{    
    echo "<script>alert('Npa $npa, Sudah Terdaftar sebelumnya.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>