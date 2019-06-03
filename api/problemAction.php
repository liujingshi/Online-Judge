<?php
include "mysql.php";
class problemAction {

    private $mysql;

    public function __construct() {
        $this->mysql = new mysql();
    }

    /**
     * 得到所有问题
     */
    public function getAll() {
        $sql = "select * from oj_problem";
        $rst = $this->mysql->query($sql);
        $rows = $this->mysql->fetchAll($rst);
        return $rows;
    }

    /**
     * 得到问题数量
     */
    public function getNum() {
        $sql = "select * from oj_problem";
        $rst = $this->mysql->query($sql);
        $num = mysqli_num_rows($rst);
        return $num;
    }

    /**
     * 根据id获取题目信息
     */
    public function get($id) {
        $sql = "select * from oj_problem where id = ".$id;
        $rst = $this->mysql->query($sql);
        $row = $this->mysql->fetch($rst);
        return $row;
    }

}