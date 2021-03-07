<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here
$qnt=0;
$is_changed=true;
while($is_changed){
    $is_changed=false;
    for($i=sizeof($a)-1; $i > 0; $i--){
        if($a[$i-1] > $a[$i]){
            $a[$i-1] += $a[$i];
            $a[$i] = $a[$i-1] - $a[$i];
            $a[$i-1] -= $a[$i];
            $is_changed=true;
            $qnt++;
        }
    }
}

echo "Array is sorted in $qnt swaps.
First Element: $a[0]
Last Element: {$a[count($a)-1]}";
?>