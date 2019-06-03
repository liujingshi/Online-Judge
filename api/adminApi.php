<?php
include "adminAction.php";
$admin = new adminAction();

$order = $_GET['order'];

/**
 * 管理员登录
 */
if ($order == "login") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $rst = $admin->verify($user, $pass);
    if ($rst == "yes") {
        $_SESSION['adminUser'] = $user;
    }
    echo $rst;
}

/**
 * 管理员退出
 */
if ($order == "exit") {
    $_SESSION['adminUser'] = "";
    echo "yes";
}

/**
 * 添加问题
 */
if ($order == "addProblem") {
    if (isset($_SESSION['adminUser']) && $_SESSION['adminUser'] != "") {
        $title = $_POST['title'];
        $description = str_replace(PHP_EOL, "<br>", $_POST['description']);
        $input = str_replace(PHP_EOL, "<br>", $_POST['input']);
        $output = str_replace(PHP_EOL, "<br>", $_POST['output']);
        $sinput = str_replace(PHP_EOL, "<br>", $_POST['sinput']);
        $soutput = str_replace(PHP_EOL, "<br>", $_POST['soutput']);
        $answer = str_replace(PHP_EOL, "<br>", $_POST['answer']);
        $data = str_replace(PHP_EOL, "<br>", $_POST['data']);
        $rst = $admin->addProblem($title,$description,$input,$output,$sinput,$soutput,$answer,$data);
        echo $rst;
    } else {
        echo "非法操作";
    }
}

/**
 * 删除问题
 */
if ($order == "deleteProblem") {
    if (isset($_SESSION['adminUser']) && $_SESSION['adminUser'] != "") {
        $id = $_POST['id'];
        $rst = $admin->deleteProblem($id);
        echo $rst;
    } else {
        echo "非法操作";
    }
}
