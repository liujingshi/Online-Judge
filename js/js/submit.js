layui.use('form', function() {
    var form = layui.form;
});

function check(id) {
    layui.use('layer', function() {
        var layer = layui.layer;
        var code = $('#codebox').val();
        layer.load(1);
        $.post('./check.php?id='+id, {
            code: code
        }, function(data) {
            layer.closeAll();
            if (data.indexOf('accept') >= 0) {
                layer.msg("Accept", {icon:1});
            } else if (data.indexOf('wrong answer') >= 0) {
                layer.msg('Wrong Answer', {icon:2});
            } else {
                layer.alert(data, {
                    title: 'Compiling Error'
                });
            }
        });
    });
}