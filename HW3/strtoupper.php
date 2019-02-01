<?php

function appendContents($fileop,$fput){
$file = fopen($fileop , 'r');
$fw = fopen ($fput , 'a');    
while (!feof($file)){
    $str = fgets($file);
    $str = strtoupper($str);
fputs($fw,$str); 
}
fclose($file);
fclose($fw);    
}
appendContents('file1.txt','frez.txt');



