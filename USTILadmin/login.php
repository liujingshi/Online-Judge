<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>USTIL Online Judge - 后台管理</title>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="../js/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="../js/css/adminLogin.css" />
</head>
<body>
<div class="layui-form layui-form-pane liushubody">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>USTIL Online Judge 后台登录</legend>
    </fieldset>
    <hr class="layui-bg-blue">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" id="username" autocomplete="off" placeholder="请输入用户名" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" id="password" autocomplete="off" placeholder="请输入密码" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <button class="layui-btn layui-btn-normal liushuwidth" onclick="login()">登录</button>
    </div>
</div>
</body>
<script type="text/javascript" src="../js/js/adminLogin.js"></script>
</html>