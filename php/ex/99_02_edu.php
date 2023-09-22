<?php

// 함수 선언 : 함수를 만들어두는 것 순서 상관은 없다
// function my_sum($num1, $num2) {
//     $sum = $num1 + $num2;
//     return $sum;
// }




// // 함수 호출 : 미리 만들어둔 함수를 부르는 것
// $result = my_sum(2, 5);
// echo $result;


// 3개의 숫자를 빼기하는 함수를 만들어주세요
// function my_bbagi($a, $b, $c) {
//     $bbagi = $a - $b - $c;
//     return $bbagi;
// }

// $result = my_bbagi(4, 6, 10);
// echo $result;

// 가변파라미터
function my_all_sum(...$numbers) {
    $sum = 0;
    foreach($numbers as $key => $val) {
        $sum = $sum + $val;
    }
    return $sum;
    // return array_sum($numbers);
}


my_all_sum(2, 3, 5);

// 레퍼런스 파라미터
function my_ref( $val, &$ref) {
    $val = "my_ref";
    $ref = "my_ref";
}

$str1 = "str1";
$str2 = "str2";
my_ref($str1, $str2);

echo "str1 : {$str1}\n";
echo "str2 : {$str2}\n";


print_r(true);
echo"\n";
var_dump(true);