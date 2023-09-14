<?php

// 버블 정렬
// $arr = [5, 32, 45, 23, 24, 16];

// // asort($arr);

// // // print_r($arr);

// $arr2 = [3, 2, 1];

// $tmp = $arr2[0];
// $arr2[0] = $arr2[1];
// $arr2[1] = $tmp;

// print_r($arr2);


$num = array(15, 13, 9, 5, 18, 16, 17);      

$count = count($num);     
for($i=$count-2; $i>=0; $i--)
{
	for($j=0; $j<=$i; $j++)  
	{
		if($num[$j] > $num[$j+1]) 
		{
			$tmp = $num[$j]; 
			$num[$j] = $num[$j+1];
			$num[$j+1] = $tmp;
		}
	}
}
print_r($num);
echo "\n";