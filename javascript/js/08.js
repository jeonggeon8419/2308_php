
// 조건문
// if(조건) {

// } else if(조건) {

// } else if {

// }

let age = 30;
switch(age) {
	case 20:
		console.log("20대");
		break;
	case 30:
		console.log("30대");
		// 처리
		break;
		default:
		console.log("모르겠다");
		//처리
		break;
}
// -----------------------------------
// 반복문 ( while, do_while, for, foreach, for...in, for...of )
// -----------------------------------

// foreach
let arr = [1, 2, 3, 4];
// arr.forEach( function(val, key){
// 	console.log(`${key} : ${val}`);
// });

// for...in : 모든 객체를 루프 가능, key에만 접근이 가능
let obj = {
	key1: 'val1'
	,key2: 'val2'
}
for( let key in obj ) {
	console.log(obj[key]);
}
// for...of : 모든 interable 객체를 루프 기능, value에 접근 가능(string, Array, Map, Set, TypeArray>>)
// for( let val of obj ) {
// 	console.log(val);
// }

// 정렬해주세요.
let sort_arr1 = [3, 10, 5, 2];
sort_arr1.sort((a, b) => a - b);
sort_arr1.sort( function(a, b) {
	return a- b
});

function bubbleSort(arr) {
    let len = arr.length;
    for (let i = 0; i < len; i++) {
        for (let j = 0; j < len - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {             // 두 원소 위치 바꾼다
                let temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
    return arr;
}

let sort_arr2 = [3, 5, 2, 7, 10];
let sorted_arr = bubbleSort(sort_arr2);
console.log(sorted_arr);


let sort_arr = [3, 5, 2, 7, 10];

sort_arr.sort(function(a, b) {
	return a - b;
});

console.log(sort_arr);


