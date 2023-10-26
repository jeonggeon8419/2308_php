// 인라인 이벤트
// html파일 9~10라인 확인


// 프로피터 리스너
const BTNGOOGLE = document.getElementById('btn_google');
BTNGOOGLE.onclick = function() {
	location.href = 'http://google.com';
};

// addEventListener(eventType, function) 방식
// const BTNDAUM = document.getElementById('btn_daum');
// let winOpen;
// BTNDAUM.addEventListener('click', () => { 
// 	winOpen = open('http://www.daum.net', '','width=500px height=500px');
// });


// 팝업창 열기
// ------------
const BTNDAUM = document.getElementById('btn_daum');
let winOpen;
BTNDAUM.addEventListener('click', popOpen);

// 팝업창 닫기
const BTNCLOSE = document.getElementById('btn_close');
BTNCLOSE.addEventListener('click', popclose);

//-----------
// 이벤트 삭제
//-----------
// BTNDAUM.removeEventListener('click', popOpen );

function popOpen() {
	winOpen = open('http://www.daum.net', '','width=500px height=500px');
}

function popclose() {
	winOpen.close();
}

const INTXT = document.getElementById('intxt');
INTXT.addEventListener('keyup', (e) => console.log(e));

const DIV1 = document.querySelector('#div1');
DIV1.addEventListener('mouseover', () => { 
	alert('드루와~');
	DIV1.style.backgroundColor = 'red';
});
DIV1.addEventListener('mouseleave', () => { 
	DIV1.style.backgroundColor = 'blue';
});


