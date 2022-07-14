<?php
include "../core/Connect.php";
$tieude=$_POST['tieude'];
$mota=$_POST['mota'];
$email=$_POST['email'];
$TT=$_POST['TT'];
$FILE = $_FILES['anh']["name"];
if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_FILES['anh']))) {

        $names      = $_FILES['anh']['name'];
        $types      = $_FILES['anh']['type'];
        $tmp_names  = $_FILES['anh']['tmp_name'];
        $errors     = $_FILES['anh']['error'];
        $sizes      = $_FILES['anh']['size'];
 
        
            if ($errors == 0)
            {
                $target_dir    = "../../Client/img_sp/";
                 $target_file   = basename($_FILES['anh']['name']);
                 echo "Lưu tại: $target_file <br>";
                 echo "Cỡ file: $sizes <br><hr>";
                 move_uploaded_file($tmp_names, $target_dir .$target_file );
            }
}
    $sql ="INSERT INTO blog (tieude, mota, email, trangthai, anh)
    values ('".$tieude."','".$mota."','".$email."','".$target_file."',".$TT.")";
if ($conn->query($sql) === TRUE) {
    echo "Thêm  thành công";
    header("location: IndexBlog.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
?>