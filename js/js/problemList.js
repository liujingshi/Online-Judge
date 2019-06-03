layui.use(['layer', 'table'], function () {
    var layer = layui.layer,
        table = layui.table;

    table.render({
        elem: '#table1',
        height:  $(document).height()-100,
        page: true,
        limit: 20,
        cols: [[
            {field: 'id', title: 'ID', width: 80},
            {field: 'title', title: '标题', width: 400},
            {title: '操作', width:150, align:'center', toolbar: '#barDemo'}
        ]],
        url: '../api/problemApi.php?order=getAllProblem',
    });

    table.on('tool(table1)', function(obj){
        var data = obj.data;
        var layEvent = obj.event;
        var tr = obj.tr;

        if(layEvent === 'del'){
            layer.confirm('真的删除行么', function(index){

                $.post('../api/adminApi.php?order=deleteProblem', {
                    id: data.id
                }, function (rst) {
                    if (rst.indexOf('yes') >= 0) {
                        layer.msg('删除成功', {icon: 1});
                        obj.del();
                        layer.close(index);
                    } else {
                        layer.msg('删除失败，请重试', {icon: 2});
                    }
                });

            });
        } else if(layEvent === 'edit'){

        }
    });

});