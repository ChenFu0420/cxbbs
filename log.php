<?php
session_start();
if(!isset($_POST['submit'])){
    echo "错误提交";
}//判断错误提交
require_once ("config.php");
$name = $_POST['name'];
$pwd1 = md5($_POST['pw1']);
$log = mysql_query( "select uid from user where username='$name'and password='$pwd1' limit 1");
if($result=mysql_fetch_array($log,$con)){
    $_SESSION['name'] = $name;
    $_SESSION['userid'] = $result['uid'];
    echo "欢迎你.$name";
}else{
    echo "登录失败";
}
