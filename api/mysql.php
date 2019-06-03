<?php
session_start();

class mysql {

    private $link;

    /**
     * 构造函数 连接数据库
     */
    public function __construct() {
        $link = mysqli_connect("localhost", "root", "", "ustiloj");
        if ($link) {
            $this->link = $link;
        } else {
            echo "数据库连接失败";
        }
    }

    /**
     * 执行一条sql语句
     */
    public function query($sql) {
        mysqli_query($this->link, "set names utf-8");
        $rst = mysqli_query($this->link, $sql);
        if ($rst) {
            return $rst;
        } else {
            echo "sql语句执行失败:".$sql;
        }
    }

    /**
     *获取一条结果
     */
    public function fetch($rst) {
        $row = mysqli_fetch_assoc($rst);
        return $row;
    }

    /**
     * 获取所有结果
     */
    public function  fetchAll($rst) {
        $rows = array();
        while ($row = mysqli_fetch_assoc($rst)) {
            $rows[] = $row;
        }
        return $rows;
    }

}