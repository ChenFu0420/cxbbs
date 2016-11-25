<?php
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST['submit'])){
    echo "错误提交";
}//判断错误提交
@$name=$_POST['username'];
@$pw1= md5($_POST['pw1']);
@$pw2= md5($_POST['pw2']);
@$email = $_POST['email'];
include_once ('config.php');
@$check_query = mysql_query("select uid from user where username='$name' limit 1");
if(mysql_fetch_array($check_query)){
    echo '错误：用户名 ',$name,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}
$reg = "insert into user (username,pwd1,pwd2,email)VALUES ('$name','$pw1','$pw2','$email')"; //插入注册信息
$result = mysql_query($reg,$con);
if (!$result){
    die('ERRO'.mysql_errno());
}else{
    echo 'seccus';
}
    mysql_close($con);
?>