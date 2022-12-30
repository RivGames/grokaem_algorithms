<?php
$arr = range(1, 10);
$item = 1;
function binary_search($arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        echo $mid . PHP_EOL;
        $guess = $arr[$mid];
        if($guess == $item){
            return $mid;
        }else if($guess > $item){
            $high = $mid - 1;
        }else{
            $low = $mid + 1;
        }
    }
    return null;
}
print(binary_search($arr,$item));