<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>更新人员信息......</title>
		<style>
	body{
	
	font-family: "word";
	}
	@font-face {
			font-family:word;
			src: url("./fonts/华康少女文字W5.TTF");			
		}
		</style>
	</head>
	<body>
<?php
header("Content-Type: text/html;charset=utf-8"); 
include "conn.php";
$user = $_POST['user'];
$id = $_POST['uid'];
echo '<h1 font-family: "word" >被修改人的学号为：'.$id.'</h1>';
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$class = $_POST['class'];
$rows = "select * from `student` where `id` = '$id'";
$stmt1 = $conn->query($rows);
$row = mysqli_num_rows($stmt1);
if ($row != 1){
    echo "<script>alert('学号不可改变，请重新输入！')</script>";
    echo ("<script>window.location.href='index.php'</script>");
}else{
    $sql = "update `student` set `user` = '{$user}',`gender` = '{$gender}',`phone` = '{$phone}',`class` = '{$class}' where `id` = '{$id}'";
    $stmt= $conn->query($sql);
    if ($stmt > 0){
        echo ("<script>alert('修改成功')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }else {
        echo ("<script>alert('修改失败')</script>");
        echo ("<script>window.location.href='index.php'</script>");
    }
}?>
	</body>
</html>







