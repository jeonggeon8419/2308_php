// 타이머 함수
    // 1. setTimeout(콜백함수, 시간(ms)) : 일정시간이 흐른 후에 콜백함수를 실행
	// setTimeout(()=>console.log('시간'), 5000);

	// 실습
		// 콘솔에 1초 뒤에 'A', 2초 뒤에 'B', 3초 뒤에 'C'
		// 	setTimeout(()=>{
		// 		console.log('A');
		// 		setTimeout(()=>{
		// 			console.log('B');
		// 			setTimeout(()=>console.log('C'), 1000);
		// 		}, 1000);
		// 	}, 1000);
		
		// // 위의 항목을 함수로
		// 	let sigan = (chr, ms) =>
		// 		setTimeout(()=>console.log(chr), ms);

		// 	sigan('D',4000);

// 2. clearTimeout(해당 setTimeout객체) : 타이머를 삭제
	let mySet = setTimeout(()=>console.log('No시간'), 6000);
	clearTimeout(mySet);

	// 3. setInterval( 콜백함수, 시간(ms)) : 일정 시간마다 반복
	let myInter = setInterval(() => console.log('자지마'),500);

	// 4. clearInterval(myInter); : 인터벌 삭제
	clearInterval(myInter);


	// 화면을 로드하고 5초 뒤에 '두둥등장'이라는 매우 큰 글씨가 나타나게 해주세요.
	document.addEventListener('DOMContentLoaded', function() {
		setTimeout(function() {
			document.getElementById('duddung').style.display = 'block';
		}, 5000);
	});

setTimeout(myAddH1, 5000);

function myAddH1() {
	const H1 = document.createElement('h1');
	H1.innerHTML = '두둥둥두욷우!';
	document.body.appendChild(H1);
}


setTimeout(() => {
	const H1 = document.createElement('h1');
	H1.innerHTML = '둥둥두욷우두욷우';
	document.body.appendChild(H1);
}, 5000);

