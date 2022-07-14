<?php
include "./config/Connect.php";
$magh=$_POST['magh'];
$trangthai=$_POST['trangthai'];
mysqli_query($conn,"update giohang set trangthai=$trangthai  where magh=$magh")or die("Thêm du lieu that bai.");
header("location:index.php");

?>