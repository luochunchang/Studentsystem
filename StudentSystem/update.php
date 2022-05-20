<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <link href="bootstarp/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css1.css" rel="stylesheet">
</head>
<body>
<?php include("header.php");?>
<div class="container">
    <br>
    <h2 style="text-align: center">学生信息修改</h2>
    <br>
<div>
    <form action="update2.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="name" class="control-label col-xs-2">姓名</label>
            <div class="col-xs-8">
                <input id="name" type="text" name="user" class="form-control" placeholder="请输入学生的姓名" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="id" class="control-label col-xs-2">学号</label>
            <div class="col-xs-8">
                <input id="id" type="text" name="uid" class="form-control" placeholder="请输入学生的学号" required>
                	
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-xs-2">性别</label>
            <div class="col-xs-8">
                <label class="radio-inline"><input type="radio" value="男" name="gender" required>男</label>
                <label class="radio-inline"><input type="radio" value="女" name="gender" required>女</label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="phone" class="control-label col-xs-2">手机号</label>
            <div class="col-xs-8">
                <input id="phone" type="text" name="phone" class="form-control" placeholder="请输入学生的手机号" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="class" class="control-label col-xs-2">班级</label>
            <div class="col-xs-8">
                <input id="class" type="text" name="class" class="form-control" placeholder="请输入学生的班级" required>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-2 col-xs-offset-4">
                <input style="padding: 10px 50px" class="btn btn-success" type="submit" value="提交">
            </div>
            <div class="col-xs-2">
                <input type="reset" style="padding: 10px 50px" class="btn btn-primary" value="重置">
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>





