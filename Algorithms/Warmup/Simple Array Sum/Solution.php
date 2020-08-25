<?php

/*
 * Complete the simpleArraySum function below.
 */
function simpleArraySum($ar) {
    $result = 0;
    foreach ($ar as $item) {
        $result += $item;
    }

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
