<!DOCTYPE html>
<html>
    <meta charset=utf-8>
<head>
<title>查询消费详情</title>    
</head>   
<body>
<form>
      <?php
         error_reporting(0);
         $fil=fopen('huizong.txt',r);
         $dat=fread($fil,filesize('yue.txt'));
         echo $dat;
         $fil=fopen('xiaofei.txt',r);
         $dat=fread($fil,filesize('xiaofei.txt'));
         echo $dat;
        ?>
        <br><br>
    <input type="button" name="tuichu3" value="退出" onclick="window.location.href='kajie.php'">
</form>    
</body> 
</html> 