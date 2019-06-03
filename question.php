<?php
include "./api/problemAction.php";
$problem = new problemAction();
$rows = $problem->getAll();
?>
<link rel="stylesheet" type="text/css" href="./js/css/question.css" />

<div id="bodydiv">
    <table class="layui-table">
        <thead>
        <tr>
            <th>Problem List</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><a href="javascript:showQuestion(<?php echo $row['id']; ?>);"><?php echo $row['title']; ?></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script type="text/javascript" src="./js/js/question.js"></script>
