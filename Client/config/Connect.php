<?php

// Tạo đối tượng mysqli
$conn = new mysqli('localhost', 'root', '','shoponline2');
 
// Kiểm tra kết nối thành công hay thất bại
// nếu thất bại thì thông báo lỗi
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Thông báo kết nối thành công
//echo "Kết nối thành công";
?>