<?php
	//1. switch문
	// 조건에 따라서 서로 다른 처리를 할 수 있습니다.
	// 보통 값이 범위가 아니고 딱 고정되어 있는 경우 if문 대신 사용할 수 있다.
	$food = "돈가스";

	switch ($food) {
		case '김밥':
			 echo "한식";
			break;
		case "마파두부";
		echo "중식";
		break;
		default:
			echo "기타";
			break;
	}

