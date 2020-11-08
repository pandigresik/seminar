<?php
// Memulai session  
session_start();

// Memusnahkan session  
session_destroy();

// menampilkan pesan pengguna telah logout
echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";

//link menuju halaman awal
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>