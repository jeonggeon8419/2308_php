<?php
//ID만 출력해 주세요
//ID List
//geon1
//geon2
//geon3

$arr = [
[
"id" => "geon1"
,"pw" => "php504"
]
,[
"id" => "geon2"
,"pw" => "php504"
]
,[
"id" => "geon3"
,"pw" => "php504"
]


];

echo "ID List\n";
foreach($arr as $item) {
	echo $item["id"]."\n";
}