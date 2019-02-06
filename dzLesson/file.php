<?php
function proof(&$line){
$arr = explode(";", $line);
$arr[1]=trim($arr[1]);
for($i=0;$i<strlen($arr[0]);$i++){
    $summ+=$arr[0][$i];
}
$y=$summ%strlen($arr[0]);
$arr[2]=($summ-$y)/strlen($arr[0]) . $y;
if ($arr[2]!=$arr[1]) $arr[1]="False";
$line = $arr[0] .';'.$arr[1] . PHP_EOL;
$file=fopen('number.txt','a');
fputs($file,$line);
return $line; 
}
$file_arr = file('number.txt');
$file=fopen('number.txt','w');
fclose($file);
array_map("proof",$file_arr);
?> 