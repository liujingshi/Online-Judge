function login() {
    layui.use('layer', function () {
        var layer = layui.layer;

        var user = $('#username').val();
        var pass = $('#password').val();
        if (user == "" || pass == "") {
            layer.msg('用户名密码不能为空');
        } else {
            $.post('../api/adminApi.php?order=login', {
                user: user,
                pass: pass,
            }, function (data) {
                if (data.indexOf('yes') >= 0) {
                    window.location.href="./";
                } else if (data.indexOf('no') >= 0) {
                    layer.msg('用户名或密码错误', {icon:2});
                } else if (data.indexOf('null') >= 0) {
                    layer.msg('用户名密码不能为空');
                } else {
                    layer.msg('未知错误，请重试');
                }
            })
        }
    });
}