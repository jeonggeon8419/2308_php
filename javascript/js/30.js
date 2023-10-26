// Date
// let now = new Date();
// let sDate = new Date('2023-09-30 19:20:10');

// // getFullYear() : 연도만 가져오는 메소드
// let yesr = now.getFullYear();
// console.log(now.getFullYear());

// // getMonth() : 월만 가져오는 매소드 (+1을 해줘야지 현재 월)
// let month = now.getMonth() + 1;
// console.log(now.getMonth() + 1);

// // getDate() : 일을 가져오는 매소드
// let Date = now.getDate() + 1;
// console.log(now.getDate());

// // getDay() : 요일을 가져오는 매소드(0(일요일) ~ 6(토요일))
// console.log(now.getDay);

// // getHours() : 시
// console.log(now.getHours);

// // getMinutes() : 분
// console.log(now.getMinutes);

// // getSeconds() : 초
// console.log(now.getSeconds);

// 기준일 : 2023-09-30 19:20:10
// 오늘로부터 몇일 전인지 구해봅시다
let now = new Date();
now = new Date();
let sDate = new Date();
const dateB = new Date('2023-09-30 19:20:10');
const diffMSec = sDate.getTime() - dateB.getTime();
const diffDate = diffMSec / (24 * 60 * 60 * 1000);
console.log(`오늘로부터 ${Math.ceil(diffDate)}전일 입니다.`);