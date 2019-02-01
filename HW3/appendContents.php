<?php
function appendContents($fileop,$fput){
$file = fopen("$fileop" , 'r');
$fw = fopen ("$fput" , 'a');    
while (!feof($file)){
    $str=fgets($file);
fputs($fw,$str); 
}
fclose($file);
fclose($fw);    
}
appendContents('file1.php','frez.php');
appendContents('file2.php','frez.php');


