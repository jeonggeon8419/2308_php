<?php

//PDO클래스를 이용해서 아래 쿼리를 실행해 주세요

// 1. 자신의 사원 정보를 employees테이블에 등록해 주세요.
// 2. 자신의 이름을 "둘리", 성을 "호이"로 변경해주세요.
// 3. 자신의 정보를 출력
// 4. 자신의 정보를 삭제해주세요
require_once("./04_107_fnc_db_connect.php");

$obj_conn = null;
my_db_conn($obj_conn);

 

 $sql = " INSERT INTO "
        ." employees "
        ." (emp_no, birth_date, first_name, last_name, gender, hire_date) "
        ." VALUES (:emp_no, birth_date, :first_name, :last_name, gender, hire_date) "
        ;

 // update, delete, insert into 결과 받아본다
$arr_ps = [
     ":emp_no" => "50004"
    ,"birth_date" => "19920703"
    ,":first_name" => "건"
    ,":last_name" => "정"
    ,":gender" => "M"
    ,":hire_date" => "20000703"
];

$stmt   = $obj_conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$obj_conn->commit(); //커밋

var_dump($result);


// $sql = " UPDATE " 
//         ." employees "
//         ." SET "
//         ." :first_name => "둘리"
//             , :last_name" => "호이" "
//         ." WHERE " emp_no = "50004";


// $obj_conn = null;