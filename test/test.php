<?php
// for ($i = 1; $i <=9; $i++) {
// 	$mul = $i * 2;
// 	echo "2 X {$i} = {$mul}\n";
// }

for ($i = 2; $i <= 9; $i++) {
	echo "{$i}단\n";
	for ($j = 1; $j <= 9; $j++) {
		$mul = $i * $j;
		echo "$i X $j = {$mul} \n";
	}
}

// 1~10까지 출력
for($i = 1; $i <= 10; $i++) {
    echo "$i"."\n";
}
$mul = 1;
while($mul <= 10) {
	echo "$mul\n";

	$mul++;
}

// 8단 출력
// for($i = 1; $i <= 9; $i++) {
// 	$pal = $i * 8;
// 	echo "8 x {$i} = {$pal} \n";
// }

$i = 1;

while(true) {
	$pal = 7 * $i;
	echo "7 x {$i} = {$pal}"."\n";
	if($i === 9) {
		break;
	}
	$i++;
}

// 19단 출력
// for($i = 1; $i <= 9; $i++) {
// 	$pal = $i * 19;
// 	echo "19 x {$i} = {$pal}"."\n";
// }

//두 숫자 더해주는 함수
function me_sum($a, $b) {
	echo $a + $b;
}

echo me_sum(1,5)."\n";

$zz = "짜장면";

if($zz === "짜장면") {
	echo "중식";
} elseif ($zz === "비빔밥") {
	echo "한식";
} else {
	echo "양식";
}

