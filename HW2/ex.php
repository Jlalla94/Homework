<?php

echo "If you are have 21 ears old, press 1!\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "You can Drink Alcohol" : "STOP Buddy you can't drink Alcohol"; 

if ($input == 1){
    echo "Ви маете право пити Алкогольні вироби";}
    else {
    echo "Ви HEмаете право пити Алкогольні вироби";}
switch ($input){
    case 1:
        echo "Можеш бухать!!!!";
        break;
    default:
        echo " Незя мамка накажет !";
}
    