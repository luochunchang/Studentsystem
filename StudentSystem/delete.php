<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>删除.....</title>
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
$id = $_GET['id'];
$ret="正在返回学生管理界面.........";
echo '<h1 font-family: "word" ;>'.$ret.'</h1>';
$sql = "delete from `student` where `id` = '{$id}'";
$stmt = mysqli_query($conn,$sql);
if ($stmt > 0){
    echo "<script>alert('删除成功')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo ("<script>alert('删除失败')</script>");
    echo ("<script>window.location.href='index.php'</script>");
}
	?>
	</body>
</html>




