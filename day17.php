<?php
//Enter your code here

class Calculator {
    const MESSAGE = 'n and p should be non-negative';

    function power($number, $power) {
        $res = 1;
        if ($number < 0 || $power < 0) {
            throw new Exception (self::MESSAGE);
        }
        for ($times = $power; $times > 0; $times--) {
            $res *= $number; 
        }
        return $res;
    }
}

$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while($T-->0){
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try{
        $ans=$myCalculator->power($n,$p);
        echo $ans."\n";
    }
    catch(Exception $e){
        echo $e->getMessage()."\n";
    }
}
?>

<!-- 
    verilen a ve b sayılarını
    a üzeri b olarak sonucunu bulan fonksiyon
 -->