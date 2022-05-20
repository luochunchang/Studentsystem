<?php
session_start();
header("Content-Type: text/html;charset=utf-8"); 
include "conn.php";
$user = $_POST['user'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$class = $_POST['class'];
$rows = "select `id` from `student` where `id` = '{$id}'";
$stmt1 = mysqli_query($conn,$rows);
$row = mysqli_num_rows($stmt1);
if ($row == 1){
    echo "<script>alert('此学号已存在，请重新输入！')</script>";
    echo ("<script>window.location.href='add.php'</script>");
}else{
    $sql = "insert into `student` (`user`,`id`,`gender`,`phone`,`class`) value ('{$user}','{$id}','{$gender}','{$phone}','{$class}')";
     
    $stmt= $conn->query($sql);
    if ($stmt > 0){
        echo ("<script>alert('添加成功')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }else {
        echo ("<script>alert('添加失败')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }
}

