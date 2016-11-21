<?php
header("Content-Type: text/html; charset=utf8");
 if(!isset($_POST['submit'])){
    echo "错误提交";
}//判断错误提交
@$name=$_POST['username'];
@$pw1= md5($_POST['pw1']);
@$pw2= md5($_POST['pw2']);
include_once ('config.php');
$sql = "insert into user (username,pwd1,pwd2)VALUES ('$name','$pw1','$pw2')"; //插入注册信息
$result = mysql_query($sql,$con);
if (!$result){
    die('ERRO'.mysql_errno());
}else{
    echo 'seccus';
}
    mysql_close($con);
?>