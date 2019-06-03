<?php
$code = $_POST['code'];
if ($code != "") {
    $myfile = fopen("./problem/code.c", "w") or die("Unable to open file!");
    fwrite($myfile, $code);
    fclose($myfile);
    $com = "python ./problem/check.py ".$_GET['id'];
    passthru($com);
}