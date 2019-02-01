<?php
echo "Give three numbers to me!\n";
$handle = fopen ("php://stdin","r");
$n1 = fgets($handle);
$n2 = fgets($handle);
$n3 = fgets($handle);
$n1 = ($n1 > $n2)? $n1 : $n2 ;
echo 'Biggest number is ';
echo ($n1 > $n3)? $n1 : $n3 ; 
?>