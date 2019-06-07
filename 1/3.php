<?php
    header("content-type:text/html;charset=utf-8");
 
    //开启session
    session_start();
     
    //将验证码与输入框中字符串都转为小写
    //$code=strtolower($_POST['vcode']);  
  //  $str=strtolower($_SESSION['vstr']); 
     
    接收表单传递的用户名和密码
    $name=$_POST['username'];
   $pwd=$_POST['password'];
    $repwd=$_POST['repassword'];
     
    //判断密码是否一致
    if($pwd!=$repwd){
        echo"<script>alert('两次密码输入不一致，请重新输入');</script>";
        echo"<script>location='1.html'</script>";
   }else{
        //判断验证码是否正确
      //if($code!=$str){  
        //    echo "<script>alert('验证码输入错误,请重新输入');</script>";  
         //   echo"<script>location='regform.html'</script>";
       // }else{  
            //通过php连接到mysql数据库
            $conn=@mysqli_connect("localhost","root","",'my');
             
            //选择数据库
            //mysql_select_db("my");
 
            //设置客户端和连接字符集
            //mysql_query("set names utf8");
 
            //通过php进行insert操作
             //$a=$a+1;
            $sqlinsert="insert into card(username,password) values('{$name}','{$pwd}')";
 
            //通过php进行select操作
            $sqlselect="select * from card";
 
            //添加用户信息到数据库
            mysqli_query($conn,$sqlinsert);
             
            //返回用户信息字符集
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
                           
            } 
    
?>