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
    <div class="form">
        <form action="reg.php" method="post">
            <input class="form-control" type="text" name="username" id="name" placeholder="用户名" required onchange="()">
            <input class="form-control" type="password" name="pw1" id="pw1" placeholder="密码" required onchange="checkPasswords()">
            <input class="form-control" type="password" name="pw2" id="pw2" placeholder="确认密码" required onchange="checkPasswords()">
            <input class="btn btn-default" type="submit" name="submit"  value="注册">
        </form>
    </div>
    </div>
    <script>

        function checkPasswords() {
            var passl = document.getElementById("pw1");
            var pass2 = document.getElementById("pw2");
            if (passl.value != pass2.value)
                passl.setCustomValidity("两次密码必须输入一致！");
            else
                passl.setCustomValidity('');
        }
        function check() {
            document.getElementById('ok').disabled = 'disabled';
        }
    </script>
</body>
</html>