<?php
ob_start();
include "../core/Connect.php";
$TSP=$_POST['TENSP'];
$NSX=$_POST['NSX'];
$HSD=$_POST['HSD'];
$MNCC=$_POST['MNCC'];
$SL=$_POST['SL'];
$MOTA=$_POST['MOTA'];
$MLSP=$_POST['MLSP'];
$GIANHAP=$_POST['GIANHAP'];
$GIABAN=$_POST['GIABAN'];
$TT=$_POST['TT'];
$FILE = $_FILES['ANH']["name"];
if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_FILES['ANH']))) {

        $names      = $_FILES['ANH']['name'];
        $types      = $_FILES['ANH']['type'];
        $tmp_names  = $_FILES['ANH']['tmp_name'];
        $errors     = $_FILES['ANH']['error'];
        $sizes      = $_FILES['ANH']['size'];
 
        
            if ($errors == 0)
            {
                $target_dir    = "../../Client/img_sp/";
                 $target_file   = $TSP. basename($_FILES['ANH']['name']);
                 echo "Lưu tại: $target_file <br>";
                 echo "Cỡ file: $sizes <br><hr>";
                 move_uploaded_file($tmp_names, $target_dir .$target_file );
            }
    }
    $sql ="INSERT INTO sanpham (TENSP,NSX,HSD,MANCC,SOLUONG,MOTA,MALSP,GIANHAP,GIABAN,ANH,TRANGTHAI)
    values ('".$TSP."','".$NSX."','".$HSD."',".$MNCC.",".$SL.",'".$MOTA."',".$MLSP.",".$GIANHAP.",".$GIABAN.",'".$target_file."',".$TT.")";
if ($conn->query($sql) === TRUE) {
    // echo "Thêm  thành công";
    header("location: IndexProduct.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
ob_end_flush();
?>