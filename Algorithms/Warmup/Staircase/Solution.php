<?php

// Complete the staircase function below.
function staircase($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j >= ($n-$i-1)) {
                echo "#";
            }
            else {
                echo " ";
            }
        }
        echo "\n";
    }

}

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
