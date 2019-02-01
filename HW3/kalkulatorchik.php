<?php
$sum=function($number1,$number2) {

    return $number1 + $number2;
};
$min=function($number1,$number2) {

    return $number1 - $number2;
};
$umn=function($number1,$number2) {

    return $number1 * $number2;
};
$del=function($number1,$number2) {

    return $number1 / $number2;
};
function foo($number1,$number2,$op) {

    return print_r($op($number1,$number2));
}
foo (4,5,$sum);
echo "\n";
foo (4,5,$min);
echo "\n";
foo (4,5,$umn);
echo "\n";
foo (4,5,$del);
