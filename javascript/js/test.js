// 두 수를 받아서 더한 값을 리턴해주는 함수를 만들어 봅시다.
function mySum(num1, num2) {
	return num1 + num2;
}

mySum(5, 3);


// 콜백함수;

function myCallBack(fnc) {
	fnc();
}

myCallBack(function() {
	console.log('123');
}, 1000);

myCallBack(() => console.log('123') );

[1,2,3].filter(function(num){
	return num === 3;
});

function myPrint() {
	console.log('123');
}

setTimeout( myPrint, 1000);

// 1.php를 출력하는 함수
function php1() {
	console.log('php');
};
// 2.504를 출력하는 함수
function php2() {
	console.log('504');
};

// 2.풀스텍을 출력하는 함수
function php3() {
	console.log('풀스텍');
};


// 1.번함수는 3초뒤에 출력
setTimeout( php1, 5000);
// 2.번함수는 5초뒤에 출력
setTimeout( php2, 3000);
// 3.번함수는 바로출력  
php3();

// 현재 시간 구해주세요.
// yyyy-mm-dd hh:mi:ss
const  TIME = new Date();
let year = TIME.getFullYear();
let month = TIME.getMonth() + 1;
let day = TIME.getDate();
let hour = TIME.getHours();
let minute = TIME.getMinutes();
let secound = TIME.getMilliseconds();

const FORMAT_TODAY = year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + secound;

// 버튼을 하나 만듭시다
// 버튼을 클립하면 네이버로 이동시켜 주세요.
const BTN_NAVER = document.getElementById('btn-naver');
BTN_NAVER.addEventListener('click', function() {
	location.href = 'http://naver.com';
});


