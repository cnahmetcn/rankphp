<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = fgets($_fp);
$data = [];

while ($n > 0) {
    $splitData = explode(" ", fgets($_fp));
    $data[$splitData[0]] = $splitData[1];
    $n = $n-1;
}

while (!feof($_fp)) {
    $c = fgets($_fp);
    $c = preg_replace('/\s+/', '', $c);
    if (isset($data[$c])) {
        echo $c . '=' . $data[$c];
    } else {
        echo 'Not found' . PHP_EOL;
    }
}
?>

<!-- 
    girilen isimler ile o isimlerin telefon
    numaralarını eşleştiren fonksiyon
 -->