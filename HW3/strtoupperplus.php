<?php

function appendContents($fileop,$fput){
$toupper = function($input) {
  return strtoupper($input);
};
$file = fopen($fileop , 'r');
$fw = fopen ($fput , 'a');    
while (!feof($file)){
    $str = fgets($file);
    $str = $toupper($str);
fputs($fw,$str); 
}
fclose($file);
fclose($fw);    
}
appendContents('file1.txt','frez.txt');



