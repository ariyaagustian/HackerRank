<?php
$handle = fopen ("php://stdin","r");
    function fibonacci($n) {
        // Write your code here.
        if ($n < 2) {
            return $n;
        }
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
    $n = fgets($handle);
    printf("%d", fibonacci($n));
fclose($handle);
