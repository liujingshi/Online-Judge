<?php
include "problemAction.php";
$problem = new problemAction();

$order = $_GET['order'];

/**
 * 得到所有问题的table接口
 */
if ($order == "getAllProblem") {
    if (isset($_SESSION['adminUser']) && $_SESSION['adminUser'] != "") {
        $count = $problem->getNum();
        $rowsA = $problem->getAll();
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $rows = array();
        if ($count == 0) {
            $rst = array(
                'code' => 0,
                'msg' => "",
                'count' => $count,
                'data' => array()
            );
        } else {
            $i = 0;
            foreach ($rowsA as $row) {
                $i++;
                if ($i > ($page-1)*$limit && $i <= $page*$limit) {
                    $rows[] = $row;
                }
            }
            $rst = array(
                'code' => 0,
                'msg' => "",
                'count' => $count,
                'data' => $rows
            );
        }
        echo json_encode($rst);
    } else {
        echo "非法操作";
    }
}