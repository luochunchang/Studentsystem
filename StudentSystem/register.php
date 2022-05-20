<?php
header("Content-Type: text/html;charset=utf-8"); 
session_start();
include "conn.php";
$user = $_POST['user'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
$rows = "select `name` from `admin` where `name` = '{$user}'";
$stmt1= mysqli_query($conn,$rows);
$row = mysqli_num_rows($stmt1);
if ($row == 1){
    echo "<script>alert('此用户已存在，请重新输入！')</script>";
    echo ("<script>window.location.href='register.html'</script>");
}
elseif ($pwd1 == $pwd2){
    $sql = "insert into `admin` (`name`, `pwd`) value ('{$user}','{$pwd1}')";
    $conn->query($sql);
     echo "<script>alert('注册成功')</script>";
    echo ("<script>window.location.href='login.html'</script>");
}
else{
    echo "<script>alert('密码错误，请重新输入！')</script>";
    echo ("<script>window.location.href='register.html'</script>");
}
