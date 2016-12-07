<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="index-rl container ">
        <div class="index-header">
            <center><h1>CXBBS 注册</h1></center>
        </div>
    <div class="form-group">
        <form action="reg.php" method="post">
            <input class="form-control" type="text" name="username" id="name" placeholder="用户名">
            <input class="form-control" type="password" name="pw1" id="pw1" placeholder="密码">
            <input class="form-control" type="password" name="pw2" id="pw2" placeholder="确认密码">
            <dd>选择头像：<input type="image" name="image" src="images/m01.gif" class="img-" id="faceimg"></dd>
            <input class="form-control" type="email" name="email" placeholder="邮箱地址">
            <input class="form-control" type="text" name="checkcode" id="checkcode" placeholder="点击验证码刷新">
            <img src="Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'Captcha.php?'+Math.random();">
            <input class="btn btn-default" type="submit" name="submit"  value="注册">

        </form>
    </div>
    </div>

</body>
</html>