<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>
</head>
<body>
	<h1>HOME!!!</home>
	<br><br>
	<form action="/home" method="POST">
		<!-- @csrf CSRF 공격은 사용자가 악의적인 웹 사이트를 방문했을 때, 
		해당 웹 사이트에서 사용자의 브라우저를 통해 다른 웹 사이트에 요청을 보내는 공격입니다.
		 이를 방지하기 위해 Laravel은 각 요청에 대해 고유한 CSRF 토큰을 생성하고 검증합니다. -->
		@csrf
		<button type="submit">POST</button>
	</form>
	<br>
	<br>
	<form actopn="/home" method="POST">
		@csrf
		@method('PUT')
		<button type="submit">PUT</button>
	</form>
	<br>
	<br>
	<form actopn="/home" method="POST">
		@csrf
		@method('delete')
		<button type="submit">delete</button>
	</form>

</body>
</html>