<?php
 if($_POST){
$s=$_POST['YYYY']."年".$_POST['MM']."月".$_POST['DD']."日";
echo $s."<br>";
            $conn=@mysqli_connect("localhost","root","",'jiaowu');
            $sqlinsert="insert into date(date) values('{$s}')";
            $sqlselect="select * from date";
            mysqli_query($conn,$sqlinsert);          
            $insertid="select * from date where date='{$s}'";
            $result=mysqli_query($conn,$insertid);//获取数据集  
            $row=mysqli_fetch_array($result);
            echo "你选择的时间是:".$row['date']."<br>";
             echo"<script>location='message/index.html'</script>";
}
?>