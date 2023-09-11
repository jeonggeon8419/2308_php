<?php
// if로 만들어주세요.
//성적
// 범위 :
//			이상 ~ 미만
//	100 : A+
//  90~100 : A
//  80~90 : B
//  70~80 : C
//  60~70 : D
//  60미만 : F

// $num = 100;

// if($num === 100 ){
// echo "A+";

// }
// if ($num>=90 ) {
// 	echo "A";
// } elseif ( $num>80 ) {
//     echo "B";
// } elseif ( $num>70 ) {
//     echo "C";
// } elseif ( $num>60 ) {
// 	echo "D";
// } 
//  else ( $num<60 ) {
// 	echo "F";
// } 



// $score = -10;
// $grade = "";
// if ($score > 100){
// 	echo "잘못된 값을 입력 했습니다";
// }
// else if($score === 100){
// 	// echo "당신의점수는 ".$score."A+입니다";
// 	$grade = "A+";
// }else if($score >= 90){
// 	// echo "당신의점수는 ".$score." / 등급 : A입니다";
// 	$grade = "A";
// }else if($score >= 85){
// 	// echo "당신의점수는 ".$score." / 등급 : B+입니다";
// 	$grade = "B+";
// }else if($score >= 80){
// 	// echo "당신의점수는 ".$score." / 등급 : B입니다";
// 	$grade = "B";
// }else if($score >= 75){
// 	// echo "당신의점수는 ".$score." / 등급 : C+입니다";
// 	$grade = "C+";
// }else if($score >= 70){
// 	// echo "당신의점수는 ".$score." / 등급 : C입니다";
// 	$grade = "C";
// }else if($score >= 65){
// 	// echo "당신의점수는 ".$score." / 등급 : D+입니다";
// 	$grade = "D+";
// }else if($score >= 60){
// 	// echo "당신의점수는 ".$score." / 등급 : D입니다";
// 	$grade = "D";
// }else if($score < 0){
// 	echo "잘못된 값을 입력 했습니다";
// }
// else if()
// echo "당신의 점수는 {$score}점 입니다. <{$grade}>"; -->

// <?php
//IF로 만들어주세요.
//성적 
//	범위 : 
//		이상 ~ 미만
//		100   : A+
//		90~100 : A
//		80~90 : B
//		70~80 : C
//		60~70 : D
//		60미만: F

//출력 문구 : "당신의 점수는 XXX점 입니다. <등급>"

// 0~100 입력 받았을 때, "당신의 점수는 XXX점 입니다. <등급>" 라고 출력 하고,
// 그 외의 값일 경우 "잘못된 값을 입력 했습니다." 라고 출력해 주세요.

$num = 1000;
$grade = ""; // 성적용 변수 선언 및 초기화


if ( $num < 0 || $num > 100 )
{
	echo "잘못된 값을 입력 했습니다.";
}
else
{
	if( $num === 100 )
	{
		$grade = "A+";
	}
	else if( $num >= 90 )
	{
		$grade = "A";
	}
	else if( $num >= 80 )
	{
		$grade = "B";
	}
	else if( $num >= 70  )
	{
		$grade = "C";
	}
	else if( $num >= 60 )
	{
		$grade = "D";
	}
	else
	{
		$grade = "F";
	}

	echo "당신의 점수는 ".$num."점 입니다. <".$grade.">";
}



?>