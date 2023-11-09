// const BTN_DETAIL = document.querySelector('#btnDetail');
// const BTN_MODAL_CLOSE = document.querySelector('#btnModalClose');

// BTN_DETAIL.addEventListener('click', () => {
// 	const MODAL = document.querySelector('#modal');
// 	MODAL.classList.remove('displayNone');
// });

// BTN_MODAL_CLOSE.addEventListener('click', () => {
// 	const MODAL = document.querySelector('#modal');
// 	MODAL.classList.add('displayNone');
// });


let test;
//상세 모달 제어
function openDetail(id) {
	const URL = '/board/detail?id='+id;
	console.log(URL);
	fetch(URL)
	.then( response => response.json() )
	.then( data => {
		// 요소에 데이터 셋팅
		const TITLE = document.querySelector('#b_title');
		const CONTENT = document.querySelector('#b_content');
		const CREATED = document.querySelector('#created_at');
		const UPDATED = document.querySelector('#updated_at');
		const IMG = document.querySelector('#b_img');

		TITLE.innerHTML = data.data.b_title;
		CONTENT.innerHTML = data.data.b_content;
		CREATED.innerHTML = data.data.created_at;
		UPDATED.innerHTML = data.data.updated_at;
		IMG.setAttribute('src', data.data.b_img);

		// 모달 오픈
		openModal();
	} )
	.catch( error => console.log(error) )
}

// 모달 오픈 함수
function openModal() {
	const MODAL = document.querySelector('#modalDetail');
	MODAL.classList.add('show');
	MODAL.style = 'display: block; background-color: rgba(0, 0, 0, 0.7);';
}

// 모달 닫기 함수
function closeDetailModal() {
	const MODAL = document.querySelector('#modalDetail');
	MODAL.classList.remove('show');
	MODAL.style = 'display: none;';
}

// 아이디 중복 체크 처리
function idChk() {
	const ID_CHK_MSG = document.getElementById('idChkMsg');
	ID_CHK_MSG.innerHTML = ""; // 기존에 있을지도 모르는 메세지를 비우는 처리

	const INPUT_ID = document.getElementById('u_id');
	const URL = '/user/idchk';

	// POST로 fetch하는 방법
	// 새로운 폼객체 생성
	const formData = new FormData();
	formData.append("u_id", INPUT_ID.value); // 유저가 입력한 아이디 폼에 셋팅

	// 헤더 정보 셋팅
	const HEADER = {
		method:"POST"
		,body: formData
	};

	fetch(URL, HEADER)
	.then( response => response.json() )
	.then( data => {
		if(data.errflg === "0") {
			ID_CHK_MSG.innerHTML = "사용 가능한 아이디 입니다."
			ID_CHK_MSG.style.color = 'green';
		} else {
			ID_CHK_MSG.innerHTML = "중복된 아이디 입니다."
			ID_CHK_MSG.style.color = 'red';

		}
	})
	.catch( error => console.log(error) );
}