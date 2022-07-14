<?php
session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];    
$name = (isset($_SESSION['name']))?$_SESSION['name']:[]; 
include "./config/Connect.php";

        $kt="select MAKH from khachhang where email ='$name'";
        $result_kt=mysqli_query($conn,$kt) or die(" that bai.");
        $row = mysqli_fetch_row($result_kt);
        $makh=$row[0];
        $comments =$_POST['comments'];
       // echo $makh;
       date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaylap=date("Y-m-d H:i:s");
        //echo $ngaylap;
        $tongtien=$_POST['tongtien'];
        $tongsl=$_POST['tongsl'];
        $trangthai=0;
        $diachi=$_POST['address'];
        echo $diachi;
        $thanhtoan=$_POST['payment_method'];
        echo $thanhtoan;
        //echo $tongtien;
        $gh="insert into giohang(ngaylap,tongtien,soluong,makh,ghichu,diachi,thanhtoan,trangthai) values('$ngaylap',$tongtien,$tongsl,$makh,'$comments','$diachi','$thanhtoan',$trangthai)";
        $result=mysqli_query($conn,$gh) or die("Thêm giỏ hàng that bai.");

        // lấy mã giỏ hàng vừa tạo
        $magh_qr="select MAGH from giohang where ngaylap ='$ngaylap' and makh ='$makh'";
        $result_gh=mysqli_query($conn,$magh_qr) or die(" that bai.");
        $row_gh =mysqli_fetch_row($result_gh);
        $magh=$row_gh[0];

        // Tạo chi tiết giỏ hàng
        foreach( $cart as $key => $vl)
        {
            $soluong= $vl['soluong'];
            $giaban=  $vl['GIABAN'];
            $masp= $vl['MASP'];
             $sql_ctgh = "insert into ctgiohang(soluong,giatien,mota,masp,magh) values($soluong,$giaban,'alo',$masp,$magh)";
            $ctgh=mysqli_query($conn,$sql_ctgh) or die("Thêm du lieu that bai.");
        }
        //echo $magh;
        //unset($_SESSION['cart']);
        header('location:email.php?magh='.$magh.'');

?>