<?php
$username=$_POST["username"];
$password=$_POST["password"];
$username1="lqh";
$password1="1234";
$url="kajie.php";
$jie="jiemian.html";
if(strcmp($username,$username1)==0&&strcmp($password,$password1)==0)
{
  Header("HTTP/1.1 303 See Other");
  Header("Location: $url");
  exit;
}
else
{
    echo "<script>alert('学号或密码有误！')</script>";
    Header("HTTP/1.1 303 See Other");
    Header("Location: $url");
    exit;
}
?>       