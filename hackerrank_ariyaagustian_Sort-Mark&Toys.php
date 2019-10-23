<?php

// Complete the maximumToys function below.
function maximumToys($prices, $k)
{
    sort($prices);
    $i = 0;
    while ($k - $prices[$i] >= 0) {
        $k = $k - $prices[$i];
        $i++;
    }
    return $i;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $prices_temp);

$prices = array_map('intval', preg_split('/ /', $prices_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = maximumToys($prices, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
