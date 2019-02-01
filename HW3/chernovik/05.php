<?php
$file = fopen('html.txt','r');
 $i = 0;

while (!feof($file)){
    $Arr[$i] = fgets($file);
    $streengline  .=  trim($Arr[$i]); 
    $i=$i+1;
}
print_r(array_values($Arr));
$file = fopen('Res.txt', w);
fwrite($file,"Name        Surname"."\r\n");
for ( $j = 0 ; $j < preg_match_all('#<name>(.+?)</name>#is', $streengline, $ar1); $j++){
    print_r($ar1);
    preg_match_all('#<surname>(.+?)</surname>#is', $streengline, $ar2);
    fwrite($file,$ar1 [1] [$j] . "           " . $ar2 [1] [$j] . "\r\n");
    $Name [$j] [0] = $ar1 [1] [$j];
    $Name [$j] [1] = $ar2 [1] [$j];    
}
print_r ($Name);
?>