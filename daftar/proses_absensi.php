<?php
include "../koneksi.php";

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$npa = $_POST["npa"];
if(isset($_POST["submit"])) {
  if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
    $sql = "insert into kehadiran (npa,images) values ('$npa','$target_file')";
    //echo $sql; die();
    mysql_query($sql);
    echo "<script>alert('Terima kasih, Anda Sudah melakukan absen kehadiran.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>