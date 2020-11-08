<?php
//masukkan link
include "koneksi.php";

//mengambil user dan pwd dari form yang di POST kan
$username = $_POST['username'];
$password = $_POST['password'];


//jika user kosong maka akan ada pesan bahwa belum diisi kemudian menuju kehalaman awal lagi
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";

//jika pwd kosong maka menampilkan pesan peringatan bahwa pwd belum diisi sehingga menuju kehalaman awal
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";

}else{

//memulai session
session_start();

//perintah sql untuk menampilkan semua isi dari tabel admin yang user dan pwd sama seperti yang diinputkan dari form
$login = mysql_query("select * from admin where username='$username' and password='$password'");

//jika query berhasil dijlankan maka akan memberi nilai pada session dari data ditabel admin
if (mysql_num_rows($login) > 0){
$ambil = mysql_fetch_array($login);
$_SESSION['username'] = $ambil['username'];
$_SESSION['nama'] = $ambil['nama'];
$_SESSION['images'] = $ambil['images'];
$_SESSION['wkt_dftr'] = $ambil['wkt_dftr'];
$_SESSION['ha'] = $ambil['ha'];

//jika ha akses adalah admin maka akan menuju kehalaman dasbor-seminar
if($ambil['ha']=="admin"){
header("location:dasbor-seminar/");
}

//jika ha akses adalah pengelola maka akan menuju kehalaman dasbor-kelola
if($ambil['ha']=="pengelola"){
    header("location:dasbor-kelola/");
    }
	
//pesan kesalahan pada user dan pwd
}else{
echo "<script>alert('Username atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}

?>