<?php
$num = rand(1,100);
$i = 0;
while(true) {
    $in_str = (int)trim(fgets(STDIN));
    $i++;
    var_dump($num);
    if($i === 5){
        
        break;
    }
    if($in_str > $num) {
        echo "더 큼"."\n";
    } elseif($in_str < $num) {
        echo "더 작음";
    } else if($in_str === $num) {
        echo "정답";
        break;
    }
}

