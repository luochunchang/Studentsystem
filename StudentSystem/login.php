<?php
header("Content-Type: text/html;charset=utf-8"); 
session_start();//开启缓存
include "conn.php";
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM `admin` WHERE `name` = '{$user}' and `pwd` = '{$pwd}' ";
$stmt=mysqli_query($conn,$sql);//结果集返回到了$stmt变量中。
$result = mysqli_fetch_array($stmt);//获取一行结果以数组方式返回
if(mysqli_num_rows($stmt)> 0){//如果这个数据有返回值证明数据库中存在这个user和pwd所以就能登陆成功
    $_SESSION['user'] = $result[0];//因为mysqli_fetch_array返回是一个数组所以将$result[0]中user名赋值给user
    echo "<script>alert(\"登录成功！\")</script>";
    echo "<script>window.location.href='index.php'</script>";

}else{
    echo "<script>alert(\"账号或密码错误，请重新输入！\")</script>";
    echo "<script>window.location.href='login.html'</script>";
}