<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $positive = 0;
    $negative = 0;
    $zeros = 0;
    $size = count($arr);

    foreach ($arr as $number) {
        if ($number > 0) {
            $positive++;
        }
        else if ($number < 0) {
            $negative++;
        }
        else if ($number == 0) {
            $zeros++;
        }
    }
    echo number_format((float)$positive/$size, 6, '.', '')."\n".
    number_format((float)$negative/$size, 6, '.', '')."\n".
    number_format((float)$zeros/$size, 6, '.', '');

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
