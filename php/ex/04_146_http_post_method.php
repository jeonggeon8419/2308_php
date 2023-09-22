<?php
// POST Method
// request할 때의 데이터를 외부에서 볼 수가 없다

print_r($_POST);



?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/04_146_http_post_method.php" method="POST">
        <label for="id">ID : </label>
		<input type="text" name="id" id="id" minlength="8" maxlength="15">
        <br>
		<label for="pw">PW : </label>
		<input type="password" name="pw" id="pw" required>
        <br>
        <button type="submit">전송</button>
    </form>
</body>
</html>