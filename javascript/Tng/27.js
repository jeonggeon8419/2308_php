// 원본은 보존하면서 오름차순 정렬 해주세요
const ARR_SORT = [6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40];

const sortedArr = ARR_SORT.slice().sort((a, b) => a - b);

console.log(ARR_SORT);
console.log(sortedArr);

// 짝수와 홀수를 분리해서 각각 새로운 배열 만들어 주세요. (다하면 함수로도 만들어보세요.)
const ARR2 = [5,7,3,4,5,1,2];
let boo_filter = ARR2.filter( num => num  % 2 === 0);
let boo_filter1 = ARR2.filter( num => num  % 2 === 1);

function test(arr, flg) {
	if( flg === 0) {
		return ARR2.filter( num => num  % 2 === 0);
	}
		return ARR2.filter( num => num  % 2 === 1);
}

// 다음 문자열에서 구분문자를 '.'에서 ' ' (공백)으로 변경해 주세요. (구글 검색 활용 추천)
const STR1 = 'php504.meer.Kat';
let replaced_STR1 = STR1.replaceAll('.',' ');

