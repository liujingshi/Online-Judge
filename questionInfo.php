<?php
$id = $_GET['id'];
include "./api/problemAction.php";
$problem = new problemAction();
$row = $problem->get($id);
?>
<link rel="stylesheet" type="text/css" href="./js/css/questioninfo.css" />

<div id="infodiv">

    <fieldset class="layui-elem-field">
        <legend>Problem Description</legend>
        <div class="layui-field-box">
            <?php echo $row['description']; ?>
        </div>
    </fieldset>

    <fieldset class="layui-elem-field">
        <legend>Input</legend>
        <div class="layui-field-box">
            <?php echo $row['t_input']; ?>
        </div>
    </fieldset>

    <fieldset class="layui-elem-field">
        <legend>Output</legend>
        <div class="layui-field-box">
            <?php echo $row['t_output']; ?>
        </div>
    </fieldset>

    <fieldset class="layui-elem-field">
        <legend>Sample Input</legend>
        <div class="layui-field-box">
            <?php echo $row['s_input']; ?>
        </div>
    </fieldset>

    <fieldset class="layui-elem-field">
        <legend>Sample Output</legend>
        <div class="layui-field-box">
            <?php echo $row['s_output']; ?>
        </div>
    </fieldset>

    <button onclick="ojsubmit(<?php echo $id; ?>)" class="layui-btn layui-btn-normal">Submit</button>

</div>

<script type="text/javascript" src="./js/js/questioninfo.js"></script>