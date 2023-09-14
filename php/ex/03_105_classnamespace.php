<?php
// namespace : 클래스를 구분해주기 위해 설정, 보통은 해당파일에 패스로 작성
namespace up;


class Class1 {
	public function __construct() {
		echo "위에 클래스1";
	}
}

namespace down;

class Class1 {
	public function __construct() {
		echo "밑에 클래스1";
	}

}

// namespace를 이용해서 객체를 지정
// $obj_class1 = new \down\Class1();

namespace test;

 use \up\class1 as c1;
use \down\class1 as c2;

$obj_class1 = new C1();

