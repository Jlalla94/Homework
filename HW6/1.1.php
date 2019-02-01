<?php
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$arr = explode(" ", $line);
$inx = fgets($handle);
function findmax($arr,$inx){
$max1 = max($arr[($inx+0)],$arr[($inx+1)],$arr[($inx-1)]);
print_r ($arr[($inx-1)].$arr[($inx+0)].$arr[($inx+1)]);
    if ($arr[($inx+1)] == $max1) {$i=+1;}
    if ($arr[($inx-1)] == $max1) {$i =-1;}
    if ($arr[($inx+0)] == $max1){$i = 0;}
return  $i; 
}
print (findmax($arr,$inx));
?> 