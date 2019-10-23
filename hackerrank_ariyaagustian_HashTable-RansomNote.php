<?php

// Complete the checkMagazine function below.
function checkMagazine($magazine, $note)
{
    $nt = count($note);
    $mg = count($magazine);
    sort($note);
    sort($magazine);
    $i = 0;
    $j = 0;
    $count = 0;
    while ($i < $nt && $j < $mg) {
        if ($note[$i] == $magazine[$j]) {
            $count += 1;
            $i += 1;
        }
        $j += 1;
    }
    if ($count == $nt) {
        printf('Yes');
    } else {
        printf('No');
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $magazine_temp);

$magazine = preg_split('/ /', $magazine_temp, -1, PREG_SPLIT_NO_EMPTY);

fscanf($stdin, "%[^\n]", $note_temp);

$note = preg_split('/ /', $note_temp, -1, PREG_SPLIT_NO_EMPTY);

checkMagazine($magazine, $note);

fclose($stdin);
