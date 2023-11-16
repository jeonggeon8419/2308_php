@extends('layout.layout')

@section('title', 'Login')

@section('main')
<main class="d-flex justify-content-center align-items-center h-75">
	<form method="POST" action="{{route('user.registration.post')}}" style="width: 300px;"> 
		@include('layout.errorlayout')
		@csrf
		<div class="mb-1">
		  <label for="email" class="form-label"></label>
		  <div class="input-group flex-nowrap">
			<span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
				<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
			  </svg></span>
			<input type="text" class="form-control" placeholder="이메일" aria-label="Username" aria-describedby="addon-wrapping" id="email" name="email">
		</div>
	</div>
	<div class="mb-3">
		<label for="password" class="form-label"></label>
		<div class="input-group flex-nowrap">
			<span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
				<path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
				<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
			  </svg></span>
			<input type="password" class="form-control" placeholder="비밀번호" aria-label="Username" aria-describedby="addon-wrapping" id="password" name="password">
		</div>
	</div>
	<div class="mb-3">
		<label for="passwordchk" class="form-label"></label>
		<input type="password" class="form-control" placeholder="비밀번호확인" aria-label="Username" aria-describedby="addon-wrapping" id="passwordchk" name="passwordchk">
	</div>
	<div class="mb-3">
		<label for="name" class="form-label"></label>
		<input type="text" class="form-control" placeholder="이름" aria-label="Username" aria-describedby="addon-wrapping" id="name" name="name">
	</div>
	<button type="submit" class="btn btn-info text-center" style="width: 300px;">회원가입</button>
	<a class="btn btn-info text-center mt-3" style="width: 300px;" href="{{route('user.login.get')}}">취소</a>
	</form>
</main>
@endsection