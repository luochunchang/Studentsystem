<?php
include("conn.php");
?>

<html>
<head>
   <meta charset="UTF-8">
    <link href="css/css1.css" rel="stylesheet">
    <title>主页</title>
    <link href="bootstarp/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        th{
            text-align: center;
        }
        label{
            font-size: 17px;
        }
    </style>
</head>
<body>
<?php include("header.php");?>
<div class="container">
    <br>
    <h2 style="text-align: center">学生信息查询</h2>
    <br>
    <form method="get" action="#" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="name" class="control-label col-xs-2 col-xs-offset-2">请输入要查询的姓名</label>
            <div class="col-xs-4">
                <input id="name" type="text" name="user" class="form-control" placeholder="请输入姓名">
            </div>
            <input style="padding: 7px 30px;border-radius: 5px;border: none" class="col-xs-1 btn-success" type="submit" name="select" value="查询">
        </div>
    </form>
    <table class="table table-bordered table-hover" style="margin-top: 30px; text-align: center">
        <tr class="success">
            <th>姓名</th>
            <th>学号</th>
            <th>性别</th>
            <th>手机号</th>
            <th>班级</th>
        </tr>
        <?php
        if (isset($_GET['select'])) {
            $user = $_GET['user'];
            $sql = "select * from `student` where `user` = '$user'";
            foreach (mysqli_query($conn,$sql) as $stu) {
                echo "<tr>";
                echo "<td>{$stu['user']}</td>";
                echo "<td>{$stu['id']}</td>";
                echo "<td>{$stu['gender']}</td>";
                echo "<td>{$stu['phone']}</td>";
                echo "<td>{$stu['class']}</td>";
                echo "</tr>";
            }
        }
        ?>

    </table>
</div>
</body>
</html>





