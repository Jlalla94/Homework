<?php
$file = fopen('html.txt','r');
 $i = 0;
 $j = 0;
while (!feof($file)){
   
    $Arr[$i] = fgets($file);
    print $Arr[$i];
    print $i; 
    $i=$i+1;
}
print_r(array_values($Arr));
/*
for ($k=0; $k <$i; $k++){
for ($j=0; $j < count($Arr[$k]); $j++){
    if (($Arr[$k][$j] == '<')&&($Arr[$k][$j+1] == 'n')&&($Arr[$k][$j+2] == 'a')&&($Arr[$k][$j+3] == 'm')&&($Arr[$k][$j+4] == 'e')&&($Arr[$k][$j+5] == '>')){
        $j=$j+6;
        while ($Arr[$k][$j] != '<'){
        print ($NameN []= $Arr [$k][$j]);
        $j=$j+1;
        }
    }
}
}
print_r(array_values($NameN));
/*$j=0;
$k=0;
for ($k=0; $k < $i; $k++)
for ($j=0; $j < count($Arr[$k]); $j++)
{
    if (array_slice($Arr[$k], $j, 6) == "<name>"){
    if (array_slice($Arr[$k], $j, 7) != "</name>"){
    $NameN []= $Arr [$k][($j+7)];       }
    }
}
print_r(array_values($NameN));
/*function fmod{

    return $name;
};
$file = fopen('my.txt','r');
/*$p=fgets($file);
echo ($p);
fclose($file);*//*
while (!feof($file)){
    $p = fgets($file);
    echo $p;}
$file = fopen('result.txt','w');
fputs($file,'Text from PHP\r\n');*/