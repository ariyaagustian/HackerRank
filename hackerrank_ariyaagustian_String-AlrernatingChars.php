<?php

// Complete the alternatingCharacters function below.
function alternatingCharacters($s)
{
    $counter = 0;
    $s1 = str_split($s);
    for ($i = 0; $i < strlen($s) - 1; $i++) {
        if ($s1[$i] == $s1[$i + 1])
            $counter++;
    }
    return $counter;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = alternatingCharacters($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
