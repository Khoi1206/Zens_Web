<?php
function miniMaxSum($arr)
{

    sort($arr);
    $len = count($arr) - 1;
    $total = array_sum($arr);
    $max = $total - $arr[0];
    $min = $total - $arr[$len];

    //Count total of array
    echo "Count: " . $total;

    //Find min and max in array
    echo $min . " " . $max;

    //Find even and odd elements in array
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] % 2 == 0) {
            echo "even elements: " . $arr[$i];
        } else {
            echo "odd elements: " . $arr[$i];
        }
    }
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
