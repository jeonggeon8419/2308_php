<?php
// titles에 데이터가 없는 사원의 데이터를 insert


function my_db_conn( &$conn ) {
    $db_host         = "localhost"; // host 127.0.0.1 === localhost
    $db_user         = "root"; // user
    $db_pw           = "php504"; // password
    $db_name         = "employees"; // DBname
    $db_charset      = "utf8mb4"; // charset
    $db_dns          = "mysql:host=".$db_host.";dbname=".$db_name.";charset".$db_charset;

    try {
    $db_options = [
        PDO::ATTR_EMULATE_PREPARES          => false
        ,PDO::ATTR_ERRMODE                  => PDO::ERRMODE_EXCEPTION
        ,PDO::ATTR_DEFAULT_FETCH_MODE       => PDO::FETCH_ASSOC
    ];

 
    $conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
    } catch( Exception $e ) {
        $conn = null;
        return false;
    } 

    return true;
}

$conn = null;

try {
    if( !my_db_conn($conn) ) {
        echo "DB Connect Error";
        exit; // php 처리를 종료하겠다.
    }

    // select
    $sql = " SELECT "
    ."      emp.emp_no "
    ." FROM "
    ."      employees emp "
    ." WHERE "
    ."      NOT EXISTS ( "
    ."          SELECT 1 "
    ."          FROM "
    ."              titles tit "
    ."          WHERE "
    ."              emp.emp_no = tit.emp_no "
    ."       )  ";

    // prepared statment 이용할떄 방법
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $result = $stmt->fetchAll();

    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll();

    // insert
    $sql = " INSERT INTO titles ("
    ." emp_no "
    ." ,title "
    ." ,from_date "
    ." ,to_date "
    ." ) "
    ." VALUES ( "
    ." :emp_no "
    ." ,:title "
    ." ,NOW() "
    ." ,:to_date "
    ." ) "
    ;
    
    foreach($result as $item) {
        // prepared statement 셋팅
        $arr_ps = [
            ":emp_no" => $item["emp_no"]
            ,":title" => "green"
            ,":to_date" => 99990101
        ];

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($arr_ps);
        if(!$result) {
            throw new Exception("Insert Error");
        }
    }
    $conn->commit();
    print_r($result);
    } catch ( Exception $e ) {
        $conn->rollback();
        echo "ERROR : {$e->getMessage()}";
    } finally {
        $conn = null; //DB 파기
}



