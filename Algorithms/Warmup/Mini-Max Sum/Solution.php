<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $minNumber = min($arr);
    $maxNumber = max($arr);
    $minResult = array();
    $maxResult = array();

    if ($minNumber == $maxNumber) {
        $a = array_sum($arr)-$arr[0];
        $b = array_sum($arr)-$arr[count($arr)-1];

        echo($a . " " . $b);

        return;
    }

    foreach ($arr as $number) {
        if ($number != $minNumber) {
            $maxResult[] = $number;
        }
        if ($number != $maxNumber) {
            $minResult[] = $number;
        }
    }

    $a = array_sum($minResult);
    $b = array_sum($maxResult);
    echo($a . " " . $b);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
