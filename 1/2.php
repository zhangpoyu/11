<html>
<head>
<meta charset="utf-8">
</head>

<body>
<form method="post" action="1.php>
<div align="center">
<?php
              header("content-type:text/html;charset=utf-8");
            $conn=@mysqli_connect("localhost","root","",'my');  
            $sqlselect="select * from card";
            $result=mysqli_query($conn,$sqlselect);  
            echo "<h1>USER INFORMATION</h1>";
            echo "<hr>";
            echo "<table width='700px' border='1px'>";
            //从结果中拿出一行
            echo "<tr>";
            echo "<th>ID</th><th>USERNAME</th><th>PASSWORD</th>";
            echo "</tr>";
            $a=0;
            while($row=mysqli_fetch_array($result)){
                  echo "<tr>";
                //打印出$row这一行
                 $a=$a+1;
                echo "<td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['password']}</td>";
                 
                echo "</tr>";
                 }
            echo "</table>";
 
            //释放连接资源
            mysqli_close($conn);  
?>
</div>
<div>
</div>
</form>
<input type="button" name="chaxun" value="进入登录" onclick="window.location.href='jiemian.html'"><br><br>
</html>