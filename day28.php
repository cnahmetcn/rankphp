<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

$emailList = [];
for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);

    $firstName = $firstNameEmailID[0];

    $emailID = $firstNameEmailID[1];
    if(preg_match("/@gmail\.com$/",$emailID)) {
        $emailList[] = $firstName;
    }
}
sort($emailList);
echo implode("\n",$emailList);

fclose($stdin);
