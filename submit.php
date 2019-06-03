<link rel="stylesheet" type="text/css" href="./js/css/submit.css" />

<div class="layui-form layui-form-pane" id="formbox">
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">C code</label>
        <div class="layui-input-block">
            <textarea id="codebox" placeholder="Please enter c code" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <button id="sub" onClick="check(<?php echo $_GET['id']; ?>)" class="layui-btn layui-btn-big layui-btn-normal">Submit</button>
    </div>
</div>

<script type="text/javascript" src="./js/js/submit.js"></script>