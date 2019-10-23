<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr)
{
    $first = 0;
    $last = count($arr) - 1;
    $swaps = 0;
    while ($first < $last) {
        while ($arr[$first] == $first + 1 && $first < $last)
            $first++;
        if ($first < $last) {
            $temp = $arr[$arr[$first] - 1];
            $arr[$arr[$first] - 1] = $arr[$first];
            $arr[$first] = $temp;
            $swaps++;
        }
    }
    return $swaps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
