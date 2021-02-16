<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

if(($N % 2 == 1) || (($N % 2 == 0) && ($N >=6 && $N <= 20))) {
   printf("Weird");
}
else {
   printf("Not Weird");
}

fclose($stdin);


/*
girilen sayının modu 1 yada 0 ise ve sayı 6 dan büyük eşit 20 den de 
küçük eşit ise "weird"
diğer durumlarda "not weird" yazdırıyor.
*/