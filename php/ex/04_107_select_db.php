<?php

require_once("./04_107_fnc_db_connect.php");

$conn = null;
my_db_conn($conn);

$sql = " SELECT "
." * "
." from  "
." employees "
." where "
." emp_no = :emp_no "
;

// Prepared Statement (프리페어드 스테이먼트) 셋팅
$arr_ps = [
    ":emp_no" => 10004
];

$stmt = $conn->prepare($sql); // 쿼리를 셋팅하는 부분
$stmt->execute($arr_ps);      // 실행
$result = $stmt->fetchAll();

print_r($result);

// db 파기
db_destroy_conn($conn);