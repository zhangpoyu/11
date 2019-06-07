<!DOCTYPE html>
<html>
    <meta charset=utf-8>
<head>
<title>查询余额</title>    
</head>   
<body>
<form>
        <?php
        error_reporting(0);
         $fil=fopen('yue.txt',r);
         $dat=fread($fil,filesize('yue.txt'));
         echo $dat;
        ?>
        <br>
    <input type="button" name="tuichu2" value="退出" onclick="window.location.href='chayue.html'">
</form>    
</body> 
</html> 