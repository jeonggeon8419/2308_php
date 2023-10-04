<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/");
define("FILE_HEADER", ROOT."header.php");
require_once(ROOT."lib/lib_db.php");

// post로 request가 왔을 때 처리
$http_method = $_SERVER["REQUEST_METHOD"];
if($http_method === "POST") {
    try {
        $arr_post = $_POST;
        $conn = null; // DB Connection 변수

    //DB 접속
    if(!my_db_conn($conn)) {
            throw new Exception("DB Error : PDO instance");        
        }
        $conn->beginTransaction();
        // insert
    if(!db_insert_boards($conn, $arr_post)) {
        // DB Insert 에러
            throw new Exception("DB Error : insert Boards");       
        }
    $conn->commit();

    // 리스트 페이지 이동
    header("Location: list.php");
    exit;
    } catch(Exception $e) {
        $conn->rollBack();
        echo $e->getMessage(); // Exception 메세지 출력
        exit;
    } finally {
        db_destroy_conn($conn); //DB파기
    }
}


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_board/src/css/common.css">
    <title>작성 페이지</title>
</head>
<body>
    <?php
        require_once(FILE_HEADER);
    ?>
    <form action="/mini_board/src/insert.php" method="post">
    <div><label for="title"><h2>제목</h2></label></div>
    <input type="text" name="title" id="title">
    <br>
    <div><label for="content"><h2>내용</h2></label></div>
	<textarea name="content" id="content" cols="100" rows="40"></textarea>
    <br>
    <button class="btn" type="submit">작성</button>
    <a href="/mini_board/src/list.php">작성 취소</a>
    </form>  
</body>
</html>