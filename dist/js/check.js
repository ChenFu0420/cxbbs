$(document).ready(function() {
    var nameFlag = true;
    var emailFlag = true;
    var pwdFlag = true;

    $('#username').keyup(function() {
        var length = $(this).val().length;
        if ( length >= 2 && length <= 20 ) {
            $.post('#', {username: $(this).val(),type:'name'}, function(data, textStatus, xhr) {
                if (textStatus == 'success') {
                    if (data == '1') {
                        $('#dis_un').text('用户名已被占用');
                        nameFlag = false;
                    }else{
                        $('#dis_un').text('');
                        nameFlag = true;
                    }
                }
            });
        }else{
            $('#dis_un').text('');
        }
    });

    $('#remail').blur(function() {
        if ($(this).val() != '') {
            var reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            if (reg.test($(this).val())) {
                $.post('#', {email: $(this).val(),type: 'email'}, function(data, textStatus, xhr) {
                    if (textStatus == 'success') {
                        if (data == 1) {
                            $('#dis_em').text('邮箱地址已被占用');
                            emailFlag = false;
                        }else{
                            $('#dis_em').text('');
                            emailFlag = true;
                        }
                    }
                });
            }else{
                $('#dis_em').text('邮箱地址无效');
                emailFlag = false;
            }
        }else{
            $('#dis_em').text('');
        }
    });

    $('#password').blur(function(){
        if ($(this).val() == '') {
            $('#dis_pwd').text('两次密码必须一致');
        }else if($(this).val().length < 6){
            $('#dis_pwd').text('密码必须大于6位');
        }else{
            $('#dis_pwd').text('');
        }
    });

    $('#confirm').blur(function() {
        var val = $('#password').val();
        if (val != '') {
            if ($(this).val() == '') {
                $('#dis_con_pwd').text('请输入你的密码');
                pwdFlag = false;
            }else if($(this).val() != val){
                $('#dis_con_pwd').text('第二次输入密码');
                pwdFlag = false;
            }else{
                $('#dis_con_pwd').text('');
                pwdFlag = true;
            }
        }else{
            $('#dis_con_pwd').text('');
            pwdFlag = false;
        }
    });

    $('#reg').click(function() {
        if (!(nameFlag && emailFlag && pwdFlag)) {
            alert('请填写完整注册信息');
            return false;
        }
    });
});