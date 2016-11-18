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
    <div class="index-lg container">
        <center><h1>CXBBS 登录</h1></center>
        <div class="form-group">
            <form action="" method="post">
                <form action="" method="post">
                    <input class="form-control" type="text" name="username" id="name" placeholder="用户名" required onchange="checkUsername()">
                    <input class="form-control" type="password" name="password" id="pw1" placeholder="密码" required onchange="checkPasswords()">
                    <input class="btn btn-default" type="submit" name="提交" id="submit" value="注册">
                </form>
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
        function checkUsername() {
            var user = document.getElementById("name");
            if (name.value = 0)
                name.setCustomValidity("用户名不能为空");
            else
                name.setCustomValidity('');
        }

        function check() {
            document.getElementById('ok').disabled = 'disabled';
        }

    </script>
</body>
</html>