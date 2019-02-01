<?php
$file = fopen('html.txt','r');
 $i = 0;
while (!feof($file)){
   
    $Arr[$i] = fgets($file);
    $i=$i+1;
    print $Arr[i-1];
    print $i;
}
print_r ($Arr[0][3]);
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