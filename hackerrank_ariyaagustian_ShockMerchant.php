<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar)
{
    $new_array = array();
    $counter = 0;
    foreach ($ar as $val) {
        if (isset($new_array[$val])) {
            $counter++;
            unset($new_array[$val]);
        } else {
            $new_array[$val] = 1;
        }
    }
    return $counter;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
