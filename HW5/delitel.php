<?php
echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);
$n = $number ;
do {
    $del += $n % 10 ;
    $k = ($n % 10);
    $n = ($n - $k) /10;
}
    while ($n - $n%10 !=0) ;
    $del = $del + $n ;
if (($number % $del) == 0 ) 
    echo ($number . 'is divided into' . $del);
?>