<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">라라벨 보드</a>
	{{-- 로그인상태 --}}
	@auth
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							게시판
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
							<li><button class="dropdown-item" href="./free.html">자유 게시판</button></li>
							<li><button class="dropdown-item" href="./question.html">질문 게시판</button></li>
							</ul>
						</li>
						</ul>
						<a href="{{route('user.logout.get')}}" class="nav-link text-light" role="button">로그아웃</a>
					</div>
					@endauth
					{{-- 비로그인 상태 --}}
				@guest
					<a href="{{route('user.registration.get')}}" class="nav-link text-light" role="button">회원가입</a>
				@endguest
		</div>
	</nav>
</header>
