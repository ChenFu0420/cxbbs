<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/them.css" rel="stylesheet">
</head>

<body>
<!-- 导航栏 -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!-- 这里做了修改 -->
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>
                <li><a href="#Login" data-toggle="modal" data-target="#login">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- 页面主体内容 -->
<div class="container">
    <div class="content">
        <div class="starter-template">
            <!-- 这里做了修改，其他地方自由发挥 -->
            <h1>CXbbs</h1>
        </div>

        <!-- 注册表单 -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="register" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Register</h4>
                    </div>
                    <form action="" method="post" accept-charset="utf-8" class="form-horizontal">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="username" class="col-sm-4 control-label">Name:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="username" id="username" minlength="2" maxlength="20" placeholder="username" required="">
                                </div>
                                <!-- 错误提示信息 -->
                                <h6 style="color: red;" id="dis_un"></h6>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">Email:</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="email" id="remail" placeholder="Email" required="">
                                </div>
                                <!-- 错误提示信息 -->
                                <h6 style="color: red;" id="dis_em"></h6>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">Password:</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="6" maxlength="20" required="">
                                </div>
                                <!-- 错误提示信息 -->
                                <h6 style="color: red;" id="dis_pwd"></h6>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="col-sm-4 control-label">Confirm password:</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="confirm" minlength="6" maxlength="20" required="">
                                </div>
                                <!-- 错误提示信息 -->
                                <h6 style="color: red;" id="dis_con_pwd"></h6>
                            </div>

                            <div class="form-group">
                                <label for="code" class="col-sm-4 control-label"> verification code :</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4" size="100">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <img src="#" alt="" id="codeimg" >
                                    <a href="#" title="Switch">Click to Switch</a>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Close</button>
                            <input type="reset" class="btn btn-warning" value ="reset" />
                            <button type="submit" class="btn btn-primary" id="reg">register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.content -->

    <!-- 登陆表单 -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="login" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <form action="" method="post" accept-charset="utf-8" class="form-horizontal">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="email" class="col-sm-4 control-label">Email:</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-4 control-label">Password:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="password" placeholder="password" minlength="6" maxlength="20" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="code" class="col-sm-4 control-label"> verification code :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <img src="#" alt="" id="codeimg">
                                <span>Click to Switch</span>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Close</button>
                        <input type="reset" class="btn btn-warning" value ="reset" />
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<!-- 网页底部 -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/check.js"></script>
</body>
</html>