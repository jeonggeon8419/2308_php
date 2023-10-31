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

const MY_URL = "http://picsum.photos/v2/list?page=28&limit=5";

fetch(MY_URL)
.then( response => response.json() )
.then( data => makeImg(data)  )
.catch( error => console.log(error) )

function  makeImg(data) {
	data.forEach( item => {
		const NEW_IMG = document.createElement('img');
		NEW_IMG.setAttribute('src', item.download_url);
		NEW_IMG.style.width = '200px';
		NEW_IMG.style.height = '200px';
		document.body.appendChild(NEW_IMG);
	});
}