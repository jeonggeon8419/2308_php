// 하
// 1. 현재 시간을 화면에 표시
// 중
// 2. 실시간으로 시간을 화면에 표시
// getNow();
// setInterval( getNow, 1000);

// function getNow() {
// const NOW = new Date();
// PRINTTIME.innerHTML = NOW.toLocaleTimeString();
// }

// function add_str_zero(num) {
// 	return String(num < 10 ? '0' + num : num);
// }



// // 중하
// // 3. 멈춰 버튼을 누르면, 시간이 정지할 것
// const BTNSTOP = document.querySelector('#btn-stop');
// BTNSTOP.addEventListener('click', clearInterval)

// 중상
// 4. 재시작 버튼을 누르면, 버튼을 누른 시점의 시간부터 다시 실시간으로 화면에 표시


const PRINTTIME = document.getElementById('clock');
let date
const NOW = () => date = new Date();

const TIME = () => {
	NOW();
	PRINTTIME.innerHTML = date.toLocaleTimeString();
}

let interval =setInterval(TIME,1000);

let stopTime = () => clearInterval(interval);

const BTNSTOP = document.getElementById('btn-stop');
BTNSTOP.addEventListener('click', stopTime);

let startTime = () => interval = setInterval(TIME,1000);

const BTNRESTART = document.getElementById('btn-restart');
BTNRESTART.addEventListener('click', startTime);

