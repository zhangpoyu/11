<?php
$name=$_POST['username'];
$pwd=$_POST['password'];
if(empty($_POST['username'])){
    echo "<script>alert('用户名不能为空！');</script>";
    echo"<script>location='a.html'</script>";
    }
if(empty($_POST['password'])){
    echo "<script>alert('密码不能为空！');</script>";
    echo"<script>location='a.html'</script>";
    }
if(empty($_POST['course'])){
    echo "<script>alert('所授科目不能为空！');</script>";
    echo"<script>location='a.html'</script>";
    }   
else{
            $conn=@mysqli_connect("localhost","root","",'jiaowu');
            $sqlselect="select * from guanli where username='{$name}' ";
           //mysqli_query($conn,$sqlinsert);          
            $result=mysqli_query($conn,$sqlselect);//获取数据集  
            $row=mysqli_fetch_array($result);
            $repassword=$row['password'];
            if($pwd!=$repassword){
             echo  "<script>alert('密码错误！');</script>";
             echo  "<script>location='a.html'</script>";
            }
            }
            
?>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<div>
<?php
            $course=$_POST['course'];  
            header("content-type:text/html;charset=utf-8");
            $conn=@mysqli_connect("localhost","root","",'jiaowu');  
            $sqlselect="select * from users where name='{$course}'";
            $result=mysqli_query($conn,$sqlselect);  
            echo "<h1>SELECTED INFORMATION</h1>";
            echo "<hr>";
            echo "<table width='700px' border='1px'>";
            //从结果中拿出一行
            echo "<tr>";
            echo "<th>ID</th><th>USERNAME</th>";
            echo "</tr>";
            $a=0;
            while($row=mysqli_fetch_array($result)){


//$id=$row['id']
            //$sqlselec="select * from guanli where id='{$id}'";
            //$resul=mysqli_query($conn,$sqlselec); 
            //while($ro=mysqli_fetch_array($resul))
                <td>{$row['username']}</td>       
                  echo "<tr>";
                //打印出$row这一行
                 $a=$a+1;
                echo "<td>{$row['id']}</td><td>{$row['name']}</td>";
                 
                echo "</tr>";
                 }
            echo "</table>";
 
            //释放连接资源
            mysqli_close($conn);  
?>
</div>
<form method="post" action="1.php>
<input type="button" name="chaxu" value="返回登录" onclick="window.location.href='1.html'"><br><br>
<input type="button" name="chaxun" value="相应学生名单" onclick="window.location.href=''"><br><br>
</form>
</body>
</html>










