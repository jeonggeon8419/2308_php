<?php

//PDO클래스를 이용해서 아래 쿼리를 실행해 주세요

// 1. 자신의 사원 정보를 employees테이블에 등록해 주세요.
// 2. 자신의 이름을 "둘리", 성을 "호이"로 변경해주세요.
// 3. 자신의 정보를 출력
// 4. 자신의 정보를 삭제해주세요
$db_host         = "localhost"; // host 127.0.0.1 === localhost
$db_user         = "root"; // user
$db_pw           = "php504"; // password
$db_name         = "employees"; // DBname
$db_charset      = "utf8mb4"; // charset
$db_dns          = "mysql:host=".$db_host.";dbname=".$db_name.";charset".$db_charset;

$db_options = [
    //DB의 Prepared Statement 기능을 사용하도록 설정
    PDO::ATTR_EMULATE_PREPARES          => false
    // PDO Exception을 Throws하도록 설정
    ,PDO::ATTR_ERRMODE                  => PDO::ERRMODE_EXCEPTION
    // 연상배열로 Fetch를 하도록 설정
    ,PDO::ATTR_DEFAULT_FETCH_MODE       => PDO::FETCH_ASSOC
];

// PDO Class로 DB 연동
$obj_conn = new PDO($db_dns, $db_user, $db_pw, $db_options);


 

 $sql = " INSERT INTO "
        ." employees "
        ." ( emp_no, birth_date, first_name, last_name, gender, hire_date ) "
        ." VALUES ( :emp_no, birth_date, :first_name, :last_name, gender, hire_date ) "
        ;

 // update, delete, insert into 결과 받아본다
$arr_ps = [
     ":emp_no" => 500004
    ,":birth_date" => 19920703
    ,":first_name" => "건"
    ,":last_name" => "정"
    ,":gender" => "M"
    ,":hire_date" => 20000703
];

$stmt   = $obj_conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$obj_conn->commit(); //커밋

var_dump($result);


$sql =
    " UPDATE employees "
    ." SET first_name = :first_name "
    ." ,last_name = :last_name "
    ." WHERE " 
    ." emp_no = 500004 ";


$arr_ps = [
    ":first_name" => "두르리"
    ,":last_name" => "호이"
    ,":emp_no" => 500004
    ];
$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);

$conn -> commit();

$sql = " SELECT " 
        ."   * "
        ." FROM "
        ." employees "
        ." WHERE "
        ." emp_no = :emp_no "
        ;
$arr_ps = [
    ":emp_no" => 500004
];


$stmt = $conn->prepare($sql);
$stmt->execute($arr_ps);
$resert = $stmt->fetchall();

print_r($resert);

$conn = null;

var_dump($result);

$conn = null;


// $obj_conn = null;


$sql = " DELETE "
        ." FROM " 
        ." employees "
        ." WHERE "
        ."  emp_no = :emp_no; "
        ;
$arr_ps = [
    ":emp_no" => 500004
];

$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$res_cnt = $stmt->rowCount();

var_dump($res_cnt);
    $stmt = $obj_conn -> prepare($sql);
    $result = $stmt -> execute($arr_ps); // 
    $obj_conn->commit();