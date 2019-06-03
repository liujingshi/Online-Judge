<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/layui/layui.js"></script>
<link rel="stylesheet" type="text/css" href="../js/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="../js/css/problemList.css" />

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
    <legend>问题管理</legend>
</fieldset>

<table id="table1" lay-filter="table1"></table>

<script type="text/javascript" src="../js/js/problemList.js"></script>

<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
</script>