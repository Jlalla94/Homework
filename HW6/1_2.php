<?php
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$arr = explode(" ", $line);
$inx = fgets($handle);
function findmax($arr,$inx){
    $arr1 = ['0' => $arr[($inx+0)],'-1' => $arr[($inx-1)],'1' => $arr[($inx+1)]];
    $i = array_search(max($arr1),$arr1);
return ($i); 
}
function go($arr,$inx){
do {    
    $str = $str . ($inx+0) . '_';
    $i=findmax($arr,$inx);
    $inx = $inx + $i;
}while ($i!=0);
return print ($str);
}
go($arr,$inx);
?>