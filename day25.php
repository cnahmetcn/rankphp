<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function isPrime(int $n) : bool {
    if ($n <= 3) return $n > 1;
    elseif ($n % 2 == 0 || $n % 3 == 0) return false;

    $i = 5;
    while (($i*$i) <= $n) {
        if ($n%$i == 0 || $n%($i+2) == 0) return false;
        $i = $i + 6;
    }

    return true;
}

$len = fscanf($_fp, "%d")[0];

while ($len) {
    $n = fscanf($_fp, "%d")[0];
    echo isPrime($n) ? "Prime\n" : "Not prime\n";
    $len--;
}
?>