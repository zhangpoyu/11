<?php
$name=$_POST['username'];
$pwd=$_POST['password'];
if(empty($_POST['username'])){
    echo "<script>alert('用户名不能为空！');</script>";
    echo"<script>location='2.html'</script>";
    }
 if(empty($_POST['password'])){
    echo "<script>alert('密码不能为空！');</script>";
    echo"<script>location='2.html'</script>";
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
             echo  "<script>location='2.html'</script>";
            }
            }
            
?>
<html>
<head>
<style type="text/css">
body{
   background:#CCCCCC;
}
	a{
		float:right;
		margin-right:100px;
		text-decoration:none;
	}
	
</style>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div id="h1" align="center">
<img name="image"src="logo.png">
<a href="http://jwzx.hrbust.edu.cn/homepage/index.do">教务在线</a>
<h1 align="center"></h1>
</div>

<div>
<form name="land" method="post" action="3.php">
欢迎：<h4 name="id">用户：<?php echo $_POST['username']; ?></h4>
请输入注册号:<input name="id"/>
<h1> <font size="40px" face="宋体" color="#0099FF">大三课程:</font></h1>
                <p>
            <span style="padding-top:15px;">
              <input type="checkbox" name="rol[]" value="PHP" id="rol_0">
              PHP</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" 设计模式" id="rol_1">
             设计模式</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" ORACLR教程" id="rol_2">
              ORACLR教程</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" HTML" id="rol_3">
          HTML</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value="  算法设计与分析" id="rol_4">
             算法设计与分析</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value="编译原理" id="rol_5">
             编译原理</span>
                    <br>
                    <span>
              <input type="checkbox" name="rol[]" value=" MYSQL" id="rol_6">
              MYSQL</span>
                    <br>
                </p>
 <input name="name" type="submit" value="确认">
 <input name="reset" type="reset" value="重选">
</form>
</div>


</body>
</html>
