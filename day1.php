<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$i1;
$d1;
$s1;

// Read and save an integer, double, and String to your variables.
$i1 = readline();
$d1 = readline();
$s1 = readline();

// Print the sum of both integer variables on a new line.
echo $i + $i1;
echo "\n";

// Print the sum of the double variables on a new line.
echo number_format(floatval($d + $d1), 1);
echo "\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s.$s1;

fclose($handle);
?>