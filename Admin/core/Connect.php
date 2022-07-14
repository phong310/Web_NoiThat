<?php

// Tạo đối tượng mysqli
$conn = new mysqli('localhost','root','','shoponline2');

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Thông báo kết nối thành công
// echo "Kết nối thành công";
?>