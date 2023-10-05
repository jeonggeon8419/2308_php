<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/");
define("FILE_HEADER", ROOT."header.php");
define("ERROR_MSG_PARAM", "%s은 필수 입력 사항입니다");
require_once(ROOT."lib/lib_db.php");

// post로 request가 왔을 때 처리
$conn = null;
$http_method = $_SERVER["REQUEST_METHOD"];
$arr_err_msg = []; // 에러 메세지 저장용
$title = "";
$content = "";
if($http_method === "POST") {
    try {
        $arr_post = $_POST;
        $conn = null; // DB Connection 변수
        $title = isset($_POST["title"]) ? trim($_POST["title"]) : ""; // title 셋팅
        $content = isset($_POST["content"]) ? trim($_POST["content"]) : ""; // content 셋팅
        
        if($title === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "제목");
        }
        if($content === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "내용");
        }

        if(count($arr_err_msg) === 0) {
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
        }
    } catch(Exception $e) {
        if($conn !== null){
            $conn->rollBack();
        }
        //echo $e->getMessage(); // 예외발생 메세지 출력
        header("Location: error.php/?err_msg={$e->getMessage()}");
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
        <?php 
           foreach($arr_err_msg as $val) {
        ?>
                <p><?php echo $val ?></p>
        <?php
           }
        ?>
    <form action="/mini_board/src/insert.php" method="post">
    <div><label for="title"><h2>제목</h2></label></div>
<<<<<<< HEAD
    <input type="text" name="title" id="title" value="<?php echo $title ?>">
    <br>
    <div><label for="content"><h2>내용</h2></label></div>
	<textarea name="content" id="content" cols="100" rows="40"><?php echo $content ?></textarea>
=======
    <input type="text" name="title" id="title">
    <br>
    <div><label for="content"><h2>내용</h2></label></div>
	<textarea name="content" id="content" cols="100" rows="40"></textarea>
>>>>>>> ea6569302b27660e71e1dfd634b73be19bc65113
    <br>
    <button class="btn" type="submit">작성</button>
    <a href="/mini_board/src/list.php">작성 취소</a>
    </form>  
</body>
</html>