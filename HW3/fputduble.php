<?php
$file = fopen('file1.txt','r');
$fw = fopen ('frez.txt','a');
while (!feof($file)){
    $str=fgets($file);
fputs($fw,$str); 
fputs($fw,$str);
}
$file = fopen('file2.txt','r');
while (!feof($file)){
$str=fgets($file);
fputs($fw,$str); 
fputs($fw,$str);
}

