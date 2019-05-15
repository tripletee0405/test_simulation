<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "news";
$mysql_port = 3306;

// Mở kết nối
$conn = new mysqli($host, $username, $password, $database, $mysql_port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Set hiển thị tiếng Việt
$conn->query("SET NAMES 'utf8'");
?>