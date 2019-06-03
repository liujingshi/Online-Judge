<?php
session_start();
if (!isset($_SESSION['adminUser']) || $_SESSION['adminUser'] == "") {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>USTIL Online Judge - 后台管理</title>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="../js/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="../js/css/admin.css" />
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">USTIL Online Judge</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="javascript:problemList();">问题管理</a></li>
            <li class="layui-nav-item"><a href="">比赛管理</a></li>
            <li class="layui-nav-item"><a href="">用户管理</a></li>
            <li class="layui-nav-item"><a href="">管理员管理</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <?php echo $_SESSION['adminUser']; ?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:exit();">退出</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">菜单</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:addProblem();">添加问题</a></dd>
                        <dd><a href="javascript:;">添加比赛</a></dd>
                        <dd><a href="javascript:;">添加用户</a></dd>
                        <dd><a href="">添加管理员</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <iframe id="fra" src=""></iframe>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © USTIL Online Judge
    </div>
</div>
</body>
<script type="text/javascript" src="../js/js/admin.js"></script>
</html>