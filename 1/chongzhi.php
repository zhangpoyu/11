<!DOCTYPE html>
<html>
    <meta charset=utf-8>
<head>
<title>充值</title>    
</head>   
<body>
<form action="jine.php" method="post">
        <?php
        error_reporting(0);
         $fil=fopen('huizong.txt',r);
         $dat=fread($fil,filesize('huizong.txt'));
         echo $dat;
        ?>
        <br><br>
    充值金额：<input type="text" name="money" size=30><br><br>
    <input type="submit" value="提交">&nbsp;&nbsp;
    <input type="reset" value="重置">&nbsp;&nbsp;
    <input type="button" name="tuichu2" value="退出" onclick="window.location.href='kajie.php'">
</form>    
</body> 
</html> 