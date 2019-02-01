<?php
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$arr = explode(" ", $line);
$inx = fgets($handle);
function findmax($arr,$inx){
    $arr1 = ['0' => $arr[$inx+0],'-1' => $arr[$inx-1],'1' => $arr[$inx+1]];
    print_r($arr1);
    print_r(max($arr1));
return   array_search(max($arr1),$arr1); 
}
print (findmax($arr,$inx));
?>