<?php
include "mysql.php";
class adminAction {

    private $mysql;

    public function __construct() {
        $this->mysql = new mysql();
    }

    /**
     * 验证管理员登录信息
     */
    public function verify($user, $pass) {
        if (trim($user) == "" || trim($pass) == "") {
            return "null";
        }
        $username = addslashes($user);
        $password = md5($pass);
        $sql = "select * from oj_admin where username = '{$username}'";
        $rst = $this->mysql->query($sql);
        if ($row = $this->mysql->fetch($rst)) {
            if ($row['password'] == $password) {
                return "yes";
            }
        }
        return "no";
    }

    /**
     * 添加问题
     */
    public function addProblem($title, $description, $input, $output, $sinput, $soutput, $answer, $data) {
        if (trim($title) == "") {
            return "null";
        }
        $sql = "select * from oj_problem where title = '{$title}'";
        $rst = $this->mysql->query($sql);
        if ($this->mysql->fetch($rst)) {
            return "same";
        }
        $sql = "insert into oj_problem(title,description,t_input,t_output,s_input,s_output) values('{$title}','{$description}','{$input}','{$output}','{$sinput}','{$soutput}')";
        $this->mysql->query($sql);
        $sql = "select * from oj_problem where title = '{$title}'";
        $rst = $this->mysql->query($sql);
        $row = $this->mysql->fetch($rst);
        system("mkdir -p /www/web/default/oj/problem/".$row['id']);
        $myfile = fopen("/www/web/default/oj/problem/".$row['id']."/answer.c", "w") or die("Unable to open file!");
        fwrite($myfile, $answer);
        fclose($myfile);
        $myfile = fopen("/www/web/default/oj/problem/".$row['id']."/data.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $data);
        fclose($myfile);
        if (is_file("../problem/".$row['id']."/answer.c") && is_file("../problem/".$row['id']."/data.txt")) {
            return "yes";
        } else {
            return "no";
        }
    }

    /**
     * 删除问题
     */
    public function deleteProblem($id) {
        $sql = "delete from oj_problem where id =".$id;
        $this->mysql->query($sql);
        system("rm -rf /www/web/default/oj/problem/".$id);
        if (is_file("../problem/".$id."/answer.c") || is_file("../problem/".$id."/data.txt")) {
            return "no";
        } else {
            return "yes";
        }
    }

}