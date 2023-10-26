
Math.ceil(3.5);
Math.round(3.5);
Math.floor(3.5);

// random() : 0 이상 1미만의 랜덤한 수를 반환

Math.ceil(Math.random() * 10);

console.log('루프시작')
for(let i = 0; i < 10000000; i++) {
	let ran = Math.ceil(Math.random() * 10);
	if( ran < 1 || ran > 10) {
		console.log('이상한놈');
	}
}

console.log('루프끝');

// min(), max() : 파라미터 중 가장 작은값, 가장 큰값을 리턴
let arr = [1,2,3,4];
Math.main(...arr);
Math.max(1,2,3);