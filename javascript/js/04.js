// console.log("반갑습니다.js파일입니다.");

//--------------------
// 변수 (var, let, const)
//--------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// console.log(u_name);
// var u_name = "김순이";
// console.log(u_name);

// let : 중복 선언 불사능, 재할당 가능, 블록레벨 스코프
let u_name = "홍길동";
console.log(u_name);
u_name = "김순이";
console.log(u_name);

// const : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
const AGE = 19;
// AGE = 20;
console.log(AGE);

//------
// 스코프
//------
// 전역 스코프
let gender = "M";

// 함수레벨 스코프
function test() {
	let test1 = "test1";
	if(true) {
		 test1 = "test2";
	}
	console.log(test1);
}


// 블록레벨 스코프
function test2() {
	var t = "test1"
	if(true) {
		 var t  = "test2";
	}
	console.log(t);
}

function test3() {
	let t = "test1";
	if(true) {
		 let t = "test2";
	}
	console.log(t);
}