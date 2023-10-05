<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/"); // 웹서버 root 패스 생성
define("FILE_HEADER", ROOT."header.php"); // 헤더 패스
define("ERROR_MSG_PARAM", "Parameter Error : %s"); // 헤더 패스
require_once(ROOT."lib/lib_db.php"); // DB관련 라이브러리


$conn = null; // DB Connect 연결 변수
$id = isset($_GET["id"]) ? $_GET["id"] : $_POST["id"]; // id 셋팅
$page = isset($_GET["page"]) ? $_GET["page"] : $_POST["page"]; // id 셋팅
$http_method = $_SERVER["REQUEST_METHOD"]; // method 확인
$arr_err_msg = [];

try {
    if(!my_db_conn($conn)) {
        // DB Instance 에러
        throw new Exception("DB Error : PDO Instance");
    }

    //method 
    if($http_method === "GET") {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $page = isset($_GET["page"]) ? $_GET["page"] : "";

        if($id === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
        }
        if($page === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
        }
        if(count($arr_err_msg) >= 1) {
            throw new Exception(implode("<br>", $arr_err_msg));
            
        }


        //GET Method의경우
        // 게시글 데이터 조회를 위한 파라미터
      
    } else {
        // POST Method의경우
        // 파라미터 획득
        $id = isset($_POST["id"]) ? $_POST["id"] : "";
        $page = isset($_POST["page"]) ? $_POST["page"] : "";
        $title = isset($_POST["title"]) ? $_POST["title"] : "";
        $content = isset($_POST["content"]) ? $_POST["content"] : "";

        if($id === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
        }
        if($page === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
        }
        if(count($arr_err_msg) >= 1) {
            throw new Exception(implode("<br>", $arr_err_msg));
        }
       
        if($title === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "title");
        }
        if($content === "") {
            $arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "content");
        }


        if(count($arr_err_msg) === 0) {
        // 게시글 수정을 위해 파라미터 셋팅
        $arr_param = [
            "id" => $id
            ,"title" => $title
            ,"content" => $content
        ];

        // 게시글 수정 처리
        $conn->beginTransaction(); // 트랜잭션 시작

        if(!db_update_boards_id($conn, $arr_param)) {
            throw new Exception("DB Error : Update_boards_id");
        }
        $conn->commit();  // commit

        header("Location:/mini_board/src/detail.php/?id={$id}&page={$page}"); // 디테일페이지로 이동
        exit;
     }
    }
    $arr_param = [
        "id" => $id
    ];

    // 게시글 데이터 조회
    $result = db_select_boards_id($conn, $arr_param);
    // 게시글 조회 예외철
    if($result === false) {
        throw new Exception("DB Error : PDO Select_id");
    }  else if(!(count($result) === 1)) {
        // 게시글 조회 count 에러
        throw new Exception("DB Error : PDO Select_id count, ".count($result));
    }
    $item = $result[0];

} catch(Exception $e) {
    if($http_method === "POST") {
        $conn->rollBack();
    }
    header("Location:/mini_board/src/error.php/?err_msg={$e->getMessage()}");
    exit; // 처리종료
} finally {
    db_destroy_conn($conn); // DB 파기
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_board/src/css/common.css">
    <title>수정 페이지</title>
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
    

    <form action="/mini_board/src/update.php" method="post">
        <table>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <tr>
                <th>글 번호</th>
                <td>
                    <?php echo $item["id"]; ?>
                </td>
            </tr>
            <tr>
                <th>제목</th>
                <td>
                    <input type="text" name="title" value="<?php echo $item["title"] ?>">
                </td>
            </tr>
            <tr>
                <th>내용</th>
                <td>
                <textarea name="content" id="content" cols="100" rows="40"><?php echo $item["content"] ?></textarea>
                </td>
            </tr>
        </table>
        <section>
            <td class="bt"><button class="btn" type="submit">수정 완료</button></td>
            <td class="bt"><a href="/mini_board/src/detail.php/?id=<?php echo $id; ?>&page=<?php echo $page; ?>">수정 취소</a></td>
        </section>   
    </form>
</body>
</html>