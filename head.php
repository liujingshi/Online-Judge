
<link rel="stylesheet" type="text/css" href="./js/css/head.css" />

<ul class="layui-nav layui-bg-blue">
    <li class="layui-nav-item">
        USTIL Online Judge
    </li>
    <li class="layui-nav-item">
        <a href="./">Problem</a>
    </li>
    <li class="layui-nav-item">
        <a href="">Contests</a>
    </li>
    <li class="layui-nav-item">
        <a href="">Ranking</a>
    </li>
</ul>
<ul class="layui-nav layui-bg-blue layui-layout-right">
    <?php if (isset($_SESSION['username']) && $_SESSION['username'] != "") { ?>
    <li class="layui-nav-item">
        <a href="">Name</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;">Exit</a></dd>
        </dl>
    </li>
    <?php } else {?>
        <li class="layui-nav-item">
            <a href="">register</a>
        </li>
        <li class="layui-nav-item">
            <a href="">login</a>
        </li>
    <?php }?>
</ul>

<script type="text/javascript" src="./js/js/head.js"></script>
