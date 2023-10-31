// http://picsum.photos/v2/list?page=28&limit=5
const MY_URL = "http://picsum.photos/v2/list?page=28&limit=5";
const BTN_API = document.querySelector('#btn-api');
BTN_API.addEventListener('click',my_fetch);

function my_fetch() {
	const INPUT_URL = document.querySelector('#input-url');

fetch(INPUT_URL.value.trim())
.then(response => response.json())
// .then( response => {
// 	if( response.status >= 200 && response.status < 300){
// 		return response.json();
// 	} else {
// 		throw new Error('에러에러');
// 	}
// })
	.then( data => makeImg(data) )
	.catch(error => console.log(error));
}

function makeImg(data) {
	data.forEach( item => {
		const ARTICLE = document.createElement('div');
		const NEW_ID = document.createElement('div');
		const NEW_IMG = document.createElement('img');
		
		const DIV5 =document.querySelector('#div5');

		ARTICLE.classList = 'article';
		NEW_ID.classList = 'id';
		NEW_IMG.classList = 'img';

		NEW_ID.innerHTML = item.id;
		NEW_IMG.setAttribute('src', item.download_url);
		// NEW_IMG.style.width = '200px'
		// NEW_IMG.style.height = '250px'

		ARTICLE.appendChild(NEW_ID);
		ARTICLE.appendChild(NEW_IMG);
		DIV5.appendChild(ARTICLE);

	})
	};
	const BTN_del = document.querySelector('#reset');
	BTN_del.addEventListener('click', remove_children );

	function remove_children() {
		const parent = document.getElementById('div5');
		parent.innerHTML = "";
	}