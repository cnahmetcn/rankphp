<?php



$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$mhs = array(); // mhs = max hourglass sum
for($i = 0; $i < count($arr) - 2; $i++){
    for($j = 0; $j < count($arr) - 2; $j++){
        $hs = 0;  //hs = hourglass sum
        $hs = array_sum(array_slice($arr[$i], $j, 3)) //top row
         + $arr[$i + 1][$j + 1] + // mid row
        array_sum(array_slice($arr[$i + 2], $j, 3)); //bottom row
        array_push($mhs, $hs);
    }
}
echo max($mhs);

fclose($stdin);

