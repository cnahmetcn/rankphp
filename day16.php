<?php
function resolveInt(int $num):int {
    return $num;
}
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);
try {
    [$num] = sscanf($S, "%d");
    printf("%d\n", resolveInt($num));
} catch (TypeError $e) {
    printf("%s\n", 'Bad String');
}