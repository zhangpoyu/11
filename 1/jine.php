<html>
<head>
<title>充值</title>    
</head>   
<body>
<form>
    <?php
    $money=$_POST["money"];
    if($money>0)
    {
        echo "<script>alert('充值成功！')</script>";
    }
    else
    {
        echo "<script>alert('充值失败！')</script>";
    }
    ?>       
    <br>
     <input type="button" name="tuichu2" value="退出" onclick="window.location.href='kajie.php'">
</form>    
</body> 
</html>