<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/view/css/common.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<title>자유게시판 페이지</title>
</head>
<body class="vh-100 vw-100">
	<?php require_once("view/inc/header.php"); ?>

	<div class="text-center mb-5 mt-3">
		<h1>자유게시판</h1>
		<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#modalInsert">
			<path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
			<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
		  </svg>
	</div>
	<!-- 모달 테스트 -->
	<!-- <div id="modal" class="displayNone">
		<div id="modalW"></div>
		<button id="btnModalClose">닫기</button>
	</div> -->

	<main>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button id="" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">
			  상세</button>
			</div>
		  </div>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button href="#" class="btn btn-primary btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
			</div>
		  </div>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button href="#" class="btn btn-primary btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
			</div>
		  </div>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button href="#" class="btn btn-primary btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
			</div>
		  </div>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button href="#" class="btn btn-primary btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
			</div>
		  </div>
		<div class="card">
			<img src="/view/img/ham.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">나는 귀염둥이</h5>
			  <p class="card-text">나한테 반하지</p>
			  <button href="#" class="btn btn-primary btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
			</div>
		  </div>


	</main>

<!-- Button trigger modal -->

  
  <!--상세 Modal -->
  <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">지친 개발자</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<span>
			아 당신은 못 믿을 사람 아 당신은 철없는 사람
			아무리 달래봐도 어쩔 순 없지만 마음 하나는 괜찮은 사람
			오늘은 들국화 또 내일은 장미꽃
			치근 치근 치근대다가 잠이 들겠지
			난 이제 지쳤어요 땡벌 기다리다 지쳤어요 땡벌
			혼자서는 이 밤이 너무너무 추워요
			당신은 못 말리는 땡벌 당신은 날 울리는 땡벌
			혼자서는 이 밤이 너무너무 길어요
			아 당신은 야속한 사람 아 당신은 모를 사람
			밉다가도 돌아서면 마음에 걸리는 마음 하나는 따뜻한 사람
			바람에 맴돌다 또 맴돌다
			어딘가 기웃 기웃 기웃대다가 잠이 들겠지
			난 이제 지쳤어요 땡벌 기다리다 지쳤어요 땡벌
			혼자서는 이 밤이 너무너무 추워요
			당신은 못 말리는 땡벌 당신은 날 울리는 땡벌
			혼자서는 이 밤이 너무너무 길어요
			당신을 사랑해요 땡벌 당신을 좋아해요 땡벌
			밉지만 당신을 너무 너무 
			</span>
			<img src="/img/bee.jpg" alt="">
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
		</div>
	  </div>
	</div>
  </div>
  <!-- 작성Modal -->
  <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<form action="">
			<div class="modal-header">
				<input type="text" class="form-control" placeholder="제목을 입력하세요">
				</div>
					<div class="modal-body">
						<textarea class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
						<br><br>
						<input type="file" accept="image/*">
					</div>
				<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
			<button type="button" class="btn btn-primary" data-bs-dismiss="modal">작성</button>
			</div>
		</form>
	  </div>
	</div>
  </div>

	<footer class="fixed-bottom bg-dark text-center text-light p-3">저작권</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="/view/js/common.js"></script>
</body>
</html>