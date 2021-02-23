<?php
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);

$s = explode('0', decbin($n));
echo strlen(max($s));

fclose($stdin);

/*
ikili sisteme çevrilen sayıların 
maksimum ardışık sayılarını bulan fonksiyon
5 taban10 = 101 taban 2 ardışık en fazla 1 
13 taban 10 = 1101 taban 2 ardışık en fazla 2
*/