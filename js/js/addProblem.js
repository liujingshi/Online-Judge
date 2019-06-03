function add() {
    layui.use('layer', function () {
        var layer = layui.layer;

        var title = $('#title').val(),
            description = $('#description').val(),
            input = $('#input').val(),
            output = $('#output').val(),
            sinput = $('#sinput').val(),
            soutput = $('#soutput').val(),
            answer = $('#answer').val(),
            data = $('#data').val();

        $.post('../api/adminApi.php?order=addProblem', {
            title: title,
            description: description,
            input: input,
            output: output,
            sinput: sinput,
            soutput: soutput,
            answer: answer,
            data: data,
        }, function (rst) {
            if (rst.indexOf('null') >= 0) {
                layer.msg('请检查空项');
            }
            if (rst.indexOf('same') >= 0) {
                layer.msg('同名题目已存在', {icon: 2});
            }
            if (rst.indexOf('no') >= 0) {
                layer.msg('添加失败，请重试', {icon: 2});
            }
            if (rst.indexOf('yes') >= 0) {
                layer.msg('添加成功', {icon: 1});
            }
        });

    });
}