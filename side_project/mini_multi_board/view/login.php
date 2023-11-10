<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>로그인 페이지</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="vh-100 vw-100">
	<?php require_once("view/inc/header.php"); ?>
	
	<main class="d-flex justify-content-center align-items-center h-75">
		<form action="/user/login" method="POST" style="width: 300px"> <!--자유 게시판으로 이동-->
			<div id="errorMsg" class="form-text text-danger">
				<?php echo count($this->arrErrorMsg) > 0 ? implode("<br>", $this->arrErrorMsg) : "" ?>
				</div>
			<div class="mb-1">
			  <label for="u_id" class="form-label"></label>
			  <div class="input-group flex-nowrap">
				<span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
				  </svg></span>
				<input type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="addon-wrapping" id="u_id" name="u_id">
			</div>
		</div>
		<div class="mb-3">
			<label for="u_pw" class="form-label"></label>
			<div class="input-group flex-nowrap">
				<span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
					<path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
					<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
				</svg></span>
				<input type="password" class="form-control" placeholder="PW" aria-label="Username" aria-describedby="addon-wrapping" id="u_pw" name="u_pw">
			  </div>
			</div>
			<button type="submit" class="btn btn-info text-center" style="width: 300px; color:white; font-weight:bold;">로그인</button><br><br>
			<a href="/user/regist" class="btn btn-success text-center" style="width: 180px; height: 50px; margin-left:55px; padding-top: 13px; font-weight:bold;">새 계정 만들기</a>
		</form>
	</main>


	<footer class="fixed-bottom bg-dark text-center text-light p-3">저작권</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>