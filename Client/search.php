 <?php

include "Connect.php";
$TENSP =$_POST['search'];
$query=mysqli_query($conn,"Select * from Sanpham where TENSP like  '%$TENSP%'");
header('location:single-product.php');

?>