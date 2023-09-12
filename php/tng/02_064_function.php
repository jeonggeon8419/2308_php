<?php
//몇개일지 모르는 숫자를 다 더해주는 함수를 만들어주세요.

function my_sum($a, $b) {
	return $a + $b;
}

function my_args_param(...$items) {
	$sum = 0;
	foreach($items as $val) {
		$sum = $sum + $val;
	}
	print_r($sum);
}


my_args_param(5, 2, 3, 6, 9, 10);

