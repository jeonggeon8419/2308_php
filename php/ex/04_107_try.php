<?php

require_once("./04_107_fnc_db_connect.php");

// try-catch  : 예외처리를 하기위한 문법
// try {
//     // 우리가 실행하고 싶은 소스코드를 작성
// } catch( Exception $e ) {
//     // 예외가 발생 했을 때 실행되는 소스코드를 작성
// } finally {
//     // 정상처리 또는 예외처리에 관계 없이 무조건 실행되는 소스코드를 작성
// }

try {
    // 우리가 실행하고 싶은 소스코드를 작성
    echo "트라이"."\n";
    my_db_conn($conn);

$sql = " SELECT "
." * "
." from  "
." employees "
." where "
." emp_no1 = :emp_no "
;

// Prepared Statement (프리페어드 스테이먼트) 셋팅
$arr_ps = [
    ":emp_no" => 10004
];

$stmt = $conn->prepare($sql); // 쿼리를 셋팅하는 부분
$stmt->execute($arr_ps);      // 실행
$result = $stmt->fetchAll();

// print_r($result);
} catch( Exception $e ) {
    // 예외가 발생 했을 때 실행되는 소스코드를 작성
    echo "예외 발생 : {$e->getMessage()}";
} finally {
    // 정상처리 또는 예외처리에 관계 없이 무조건 실행되는 소스코드를 작성
    // db 파기
    db_destroy_conn($conn);
    echo "\n";
    echo "파이널리";
}