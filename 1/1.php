<html>
<head>
<meta charset="utf-8">
<style type="text/css">
body{
min-width:1000px;
min-height:1000px;
width:100%;
overflow:hidden;
background:url(div.jpg) no-repeat; 
background-size:100%;
position:absolute;
}
div{

text-align:center;
}
</style>
<head>
<body>
<div>
<?php
    header("content-type:text/html;charset=utf-8");
    session_start();
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    $repwd=$_POST['repassword'];
    if($pwd!=$repwd){
        echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
        echo"<script>location='1.html'</script>";
   }else{
            $conn=@mysqli_connect("localhost","root","",'my');
            $sqlinsert="insert into card(username,password) values('{$name}','{$pwd}')";
            $sqlselect="select * from guanli";
 
            //添加用户信息到数据库
            mysqli_query($conn,$sqlinsert);
            
            
        $insertid="select * from guanli where username='{$name}'";
        $result=mysqli_query($conn,$insertid);//获取数据集  
         $row=mysqli_fetch_array($result);
        
         echo "你的用户名是:".$row['username']."<br>";
         echo "你的密码是:".$row['password']."<br>";
         }
?>

<h5>是否现在登录</h5>
<a href="2.html" align="center">是</a>
</div>
</body>
</html>














