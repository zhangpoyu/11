<!DOCTYPE html>
<html>
    <meta charset=utf-8>
<head>
<title>图书借阅详情</title>    
</head>   
<body>
<form>
        <?php
        error_reporting(0);
         $fil=fopen('huizong.txt',r);
         $dat=fread($fil,filesize('yue.txt'));
         echo $dat;
         echo "<br>";
         $fil=fopen('tushu.txt',r);
         $dat=fread($fil,filesize('tushu.txt'));
         echo $dat;
        ?>
        <br><br>
    <input type="button" name="tuichu9" value="返回" onclick="window.location.href='tujie.html'">
</form>    
</body> 
</html> 