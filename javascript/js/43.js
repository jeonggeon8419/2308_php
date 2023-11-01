/*
1. HTTP ( Hypertext Transfer Protocol) 란?
 어떻게 Hypertext를 주고 받을지 규약한 프로토콜로
 클라이언트가 서버에 데이터를 request(요청)을 하고,
 서버가 해당 request에 따라 response(응답)을 클라이언트에 보내주는 방식입니다
 Hypertext는 웹사이트에서 이용되는 하이퍼 링크나 리소는, 문서, 이미지 등을 모두 포함합니다.

 2. AJAX ( Asynchronous JavaScript  And XML) 이란?
	웹페이지에서 비동기 방식으로 서버에게 데이터를 request하고,
	서버의 response를 받아 동적으로 웹페이지를 갱신하는 프로그래밍 방식입니다.
	즉, 웹 페이지 전체를 다시 로딩하지 않고도 일부분만 갱신 할 수 있습니다.
	대표적으로 XMLHttpRequest 방식과 Fetch Api 방식이 있습니다.
 
 3.  JSON ( JavaScript Object Notation) 이란
 
 
 
 <xml>
	 <data>
		 <id>56</id>
		 <name>홍길동</name>
	 </data>
 </xml>

// json
{
	data:{
		id: 56
		,name: '홍길동'
	}
}

*/

// http://picsum.photos/v2/list?page=28&limit=5
const MY_URL = "http://picsum.photos/v2/list?page=28&limit=5";
const BTN_API = document.querySelector('#btn-api');
BTN_API.addEventListener('click',my_fetch);

function my_fetch() {
	const INPUT_URL = document.querySelector('#input-url');

fetch(INPUT_URL.value.trim())
.then( response => {
	if( response.status >= 200 && response.status < 300){
		return response.json();
	} else {
		throw new Error('에러에러');
	}
})
	.then( data => makeImg(data) )
	.catch(error => console.log(error));
}

function makeImg(data) {
	data.forEach( item => {
		const NEW_IMG = document.createElement('img');
		const DIV_IMG = document.querySelector('#div-img');

		NEW_IMG.setAttribute('src', item.download_url);
		NEW_IMG.style.width = '200px';
		NEW_IMG.style.height = '200px';
		DIV_IMG.appendChild(NEW_IMG);
	})
	};

	// document.addEventListener('DOMContentLoaded', function() {
	// 	function resetAPI() {
	// 		apiObject.reset();
	// 	}
	// 	document.getElementById('#reset').addEventListener('click', resetAPI);
	// });
	const BTN_del = document.querySelector('#reset');
	BTN_del.addEventListener('click', remove_children );

	function remove_children() {
		const parent = document.getElementById('div-img');
		parent.innerHTML = "";
	}



	// fetch 2번쨰 아규먼트 셋팅 방법
	function infiniyLoop() {
		let apiurl = "http://192.168.0.82/03_insert.php"
		let init = {
			method: "POST"
			,body: {
				title:"dkdkdkdk"
				,content: "dhdhdhdh"
				,em_id: "2"
			}
			
		};
		fetch(apiurl, init)
		.then( indata => console.log(indata))
		.catch( error => console.log(error));
	}