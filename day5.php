<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

for ($x = 1; $x <= 10; $x++) {
    printf("%d x %d = %d\n", $n, $x, ($n * $x));
}

fclose($stdin);

/*
Çarpım tablosu
*/