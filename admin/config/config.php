<?php
// Liên kết csdl
$mysqli = new mysqli("localhost","root","","web_coffee");

// Check connection
if ($mysqli -> connect_errno) { // Kiểm tra xem lỗi hay không
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>