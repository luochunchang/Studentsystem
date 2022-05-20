<?php
include("conn.php");
session_start();
//如果直接打开别的页面而不是登录页面就会跳转到登录页面
if(!(isset($_SESSION['user']))){//判断user值是否存在
echo ("<script>window.location.href='login.html'</script>");
}
?>
<html>
<head>
    <title>主页</title>
    <link href="css/css1.css" rel="stylesheet">
    <link href="bootstarp/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
	a:hover {
		color: black;
	}
	a>span:hover{
		color: black;
	}
	body{
	
	font-family: "word";
	}
	@font-face {
			font-family:word;
			src: url("./fonts/华康少女文字W5.TTF");			
		}
        button {
            top: 7px;
            right: 15px;
        }
        th{
            text-align: center;
        }
        .container{
            width: 1200px;
        }
        .row{
            line-height: 50px;
        }
        .btn-warning{
            background-color: #d0455a;
        }
		.logowenzi span:nth-child(1){
				-webkit-animation: jump 0.8s linear 0s infinite alternate;
			}
			.logowenzi span:nth-child(2){
				-webkit-animation: jump 0.8s linear 0.2s infinite alternate;
			}
			.logowenzi span:nth-child(3){
				-webkit-animation: jump 0.8s linear 0.4s infinite alternate;
			}			
			.logowenzi span:nth-child(4){
				-webkit-animation: jump 0.8s linear 0.6s infinite alternate;
			}
			.logowenzi span:nth-child(5){
				-webkit-animation: jump 0.8s linear 0.7s infinite alternate;
			}
			.logowenzi span:nth-child(6){
				-webkit-animation: jump 0.8s linear 0.8s infinite alternate;
			}
		@-webkit-keyframes jump{
				  0%{top: 0px;color:#d0455a;}
				  50%{top: -5px;color: write;}
				  100%{top: 5px;color: black;}
				 }
    </style>
</head>
<body>
<div class="container">
    <div class="row" style="background-color: #C67B97;color: white">
        <!--bootstrap的栅格系统默认有十二行，平分这十二行-->
		<div style="font-size: 25px" class="col-xs-3 logowenzi">
			<span>学</span>
			<span>生</span>
			<span>管</span>
			<span>理</span>
			<span>系</span>
			<span>统</span>
		</div>
        <a href="index.php"><span class="col-xs-1">学生信息</span></a>
        <a href="update.php"><span class="col-xs-1">修改学生</span></a>
        <a href="select.php"><span class="col-xs-1">查询学生</span></a>
        <a href="add.php"><span class="col-xs-1">添加学生</span></a>
		<!--col-xs-offset-1偏移一位; echo $_SESSION['user']将login中获取的user值输出-->		
        <span style="left: 0px" class="col-xs-3 col-xs-offset-1">管理账号：<?php echo $_SESSION['user']?></span>
        <a href="login.html"><button class="col-xs-1 btn btn-info active">退出</button></a>
    </div>
</div>
</body>
</html>