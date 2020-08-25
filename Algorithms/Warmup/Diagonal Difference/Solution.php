<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr, $n) {
    // Write your code here
    $resLeft = array();
    $resRight = array();

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j == $i) {
                if ($j == (($n-$i)-1)) {
                    $resRight[] = $arr[$i][$j];
                }
                $resLeft[] = $arr[$i][$j];
            }
            else if ($j == (($n-$i)-1)) {
                $resRight[] = $arr[$i][$j];
            }
        }
    }

    $a = array_sum($resLeft);
    $b = array_sum($resRight);

    return abs($a - $b);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr, $n);

fwrite($fptr, $result . "\n");

fclose($fptr);
