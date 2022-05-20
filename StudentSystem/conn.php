
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$tab = "work";
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$tab);
mysqli_set_charset($conn,'utf8');//设置字符集
?>
