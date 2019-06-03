<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/layui/layui.js"></script>
<link rel="stylesheet" type="text/css" href="../js/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="../js/css/addProblem.css" />

<div class="layui-form layui-form-pane liushubody">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>添加问题</legend>
    </fieldset>
    <hr class="layui-bg-blue">
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input type="text" id="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">问题描述</label>
        <div class="layui-input-block">
            <textarea id="description" placeholder="请输入问题描述" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">输入</label>
        <div class="layui-input-block">
            <textarea id="input" placeholder="请输入输入" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">输出</label>
        <div class="layui-input-block">
            <textarea id="output" placeholder="请输入输出" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">样品输入</label>
        <div class="layui-input-block">
            <textarea id="sinput" placeholder="请输入样品输入" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">样品输出</label>
        <div class="layui-input-block">
            <textarea id="soutput" placeholder="请输入样品输出" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">标准答案代码</label>
        <div class="layui-input-block">
            <textarea id="answer" placeholder="请输入标准答案" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">测试数据</label>
        <div class="layui-input-block">
            <textarea id="data" placeholder="请输入测试数据" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <button class="layui-btn layui-btn-normal liushuwidth" onclick="add()">确认添加</button>
    </div>
</div>

<script type="text/javascript" src="../js/js/addProblem.js"></script>