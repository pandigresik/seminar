<?php
$servername = "localhost";
$username   = "ahmad";
$password   = "2hm2dafandi";
$dbname     = "seminar";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>