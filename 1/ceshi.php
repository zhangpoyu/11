<html>
<body>
<?php
$dbcon=OCILogon("root","pass","(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.1.130)(PORT=1521)(CONNECT_DATA=(SID=GZXNCW)))");
if(!$dbcon){
    $e=oci_error();
    echo  "链接失败";
}
else
{
    echo "链接成功";
}
?>    
</body>    
</html>

<?php
$conn=oci_connect('scott','tiger','192.168.1.130/orcl');
if(!$conn){
    $e=oci_error();
    echo  "链接失败";
}
else
{
    echo "链接成功";
}
?>