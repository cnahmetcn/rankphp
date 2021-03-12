<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */


function datify($date){
    return str_replace(' ', '-',trim(($date)));
}

function price($date1,$date2){
    $days = 15;
    $months = 500;
    $fallback = 10000;
    
    if(strtotime($date2) - strtotime($date1) <= 0){
        return 0;
    } 
    
    $arr_date1 = explode('-',$date1);
    $arr_date2 = explode('-',$date2);  
    
    if($arr_date1[2] !== $arr_date2[2]){
        #diff Year
        return $fallback;
    }else{
       if(intval($arr_date1[1]) !== intval($arr_date2[1])){
           return (intval($arr_date2[1]) - intval($arr_date1[1]))*$months; 
       }else{
           return (intval($arr_date2[0]) - intval($arr_date1[0]))*$days; 
       }
    }
}

$date_returned = datify(fgets($_fp));
$date_expire   = datify(fgets($_fp));

print(price($date_expire,$date_returned));
?>