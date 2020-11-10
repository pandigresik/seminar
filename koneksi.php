<?php
include 'mysql.php';
include 'config.php';

mysql_connect($servername, $username, $password) or die ("Gagal Mengkoneksikan Ke Database");
mysql_select_db($dbname) or die ("Database Tidak Ditemukan");
?>	