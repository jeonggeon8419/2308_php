<?php

//switch를 이용하여 작정
//1등이면 금상, 2등이면 은상, 3등이면 동상, 4등이면 장려상, 그 외는 노력상
// $rank = ""
// $olim = "5등";

// switch ($rank) {
// 	case '1등':
// 		echo "금상";
// 		break;
// 	case '2등':
// 		echo "은상";
// 		break;
// 	case '3등':
// 		echo "동상";
// 		break;
// 	case '4등':
// 		echo "장려상";
// 		break;	
// 	default:
// 		echo "노력상";
// 		break;
// }

$num = 2;
$grade = "";

if($num === 1) {
	$grade = "금상";
}
else if($num === 2) {
	$grade = "은상";
}
else if($num === 3) {
	$grade = "동상";
}
else if($num === 4) {
	$grade = "장려상";
}
else {
	$grade = "노력상";
}

echo $grade;

?>