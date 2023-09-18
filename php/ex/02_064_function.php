<?php

// // 두 숫자를 받아서 더해주는 함수를 만들어봅시다.
// // 리턴이 없는 함수
// function my_sum($a, $b) {
// 	echo $a +$b;
// }


// // my_sum(5, 4);

// // 리턴이 있는 함수
// function my_sum2($a, $b) {
// 	return $a + $b;

// }

// // $reslt = my_sum2(1, 2);
// // echo $reslt;

// // 두수를 받아서 - * / %를 리턴하는 함수를 만들어 주세요.
// // function my_ppaegi($c, $d) {
// // 	return $c - $d;
// // }

// // $reslt = my_ppaegi(3, 1);
// // echo $reslt;

// // function my_multiply($e, $f) {
// // 	return $e * $f;
// // }

// // $reslt = my_multiply(3, 1);
// // echo $reslt;
// // function my_divide($g, $h) {
// // 	return $g / $h;
// // }

// // $reslt = my_divide(3, 1);
// // echo $reslt;
// // function my_remain($i, $j) {
// // 	return $i % $j;
// // }

// // $reslt = my_remain(3, 1);
// // echo $reslt;

// // 파라미터의 기본값이 설정되어 있는 함수
// // function my_sum3($a, $b = 5, $c = 2) {
// // 	return $a + $b + $c;
// // }

// // echo my_sum3(2);

// // 가변 파라미터
// // php-5.6 이상 가능
// // function my_args_param(...$items) {
// // 	print_r($items);
// // }

// // my_args_param("a","b","c");

// // 재귀 함수
// // 	function my_ap($i) {
// // 		$sum = 0;
// // 		for($i; $i > 0; $i--) {
// // 			$sum = $sum + $i;
// // 		}
// // 		return $sum;
// // 	}
// // echo my_ap(0);



// // function my_reverse($i) {
// // 	if($i === 0) {
// // 		return 0;
// // 	}
// // 	else return $i + my_reverse($i-1);
// // }
// // echo my_reverse(2);

// // 숫자로 이루어진 문자열을 하나 받습니다
// // 이 문자열의 모든 숫자를 더해주세요
// // 예) "3421"일 경우, 3+4+2+1해서 10이 리턴 되는 함수

// $str = "34215";
// function my_test(string $str) {
// 	$len = mb_strlen($str);
// 	$sum = 0;
// 	for($idx = 0; $idx <= $len -1; $idx++) {
// 		$sum += (int)mb_substr($str, $idx, 1);
// 	}
// 	return $sum;
// }
// echo my_test($str);

function test1( $str ) {
	$str = "함수 test1";
	return $str;
}

// $str = "???";    // 제일 처음실행
// $result = test1( $str );
// echo $str,"\n";
// echo $result;

function test2( &$str) {
	$str = "함수 test2";
	return $str;
}

$str = "???";
$result = test2( $str );
echo $str,"\n";
echo $result;


