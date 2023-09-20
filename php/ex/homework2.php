<?php
function db_conn( &$conn ) {
    $db_host         = "localhost";
    $db_user         = "root";     
    $db_pw           = "php504";   
    $db_name         = "employees";
    $db_charset      = "utf8mb4";  
    $db_dns          = "mysql:host=".$db_host.";dbname=".$db_name.";charset".$db_charset;

    $db_options = [       
         PDO::ATTR_EMULATE_PREPARES          => false 
        ,PDO::ATTR_ERRMODE                  => PDO::ERRMODE_EXCEPTION      
        ,PDO::ATTR_DEFAULT_FETCH_MODE       => PDO::FETCH_ASSOC
    ];

    $conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
}

// 1. titles 테이블에 데이터가 없는 사원을 검색
// 2. [1]번에 해당하는 사원의 직책 정보를 insert
//     2-1. 직책은 "green", 시작일은 현재시간, 종료일은 99990101
// 3. 디비에 저장 될 것

$learn = null;
db_conn($learn);


$sql = " SELECT "
." * "
." from "
." employees emp "
." where "
." emp.emp_no "
." NOT IN "
." ( "
." SELECT "
." ti.emp_no "
." from "
." titles ti "
." ) "
       ;

       
$stmt = $learn->prepare($sql); // 쿼리를 셋팅하는 부분
$stmt->execute($arr_ps);      // 실행
$result = $stmt->fetchAll();
print_r($result);


$sql = " INSERT INTO titles "
        ." ( emp_no, title, from_date, to_date  ) "
        ." VALUES ( :emp_no, :title, now(), :to_date ) "
        ;

 
$arr_ps = [
     ":emp_no" => 700000
    ,":title" => "green"
    ,":to_date" => 99990101
];

 $stmt   = $learn->prepare($sql);
 $result = $stmt->execute($arr_ps);
 $learn->commit(); //커밋

 var_dump($result);