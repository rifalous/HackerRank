<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
    return date("H:i:s", strtotime($s));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
