<?php
$file = fopen('fizz-buzz.txt','r');
function fizz_buzz($fizz,$buzz,$limit,$frez)
{
for ($i = 0;$i++ < $limit;)
{
    if ($i % $fizz == 0) {
        if ($i % $buzz == 0) {
            fwrite($frez,"FB ");
        }
        else {
            fwrite($frez,"F ");
        }
    }
    elseif ($i % $buzz == 0){
        fwrite($frez,"B ");
    }
    else {
       fwrite($frez, $i . " ");
    }
}
}
$number1 = fgets($file);
$number2 = fgets($file);
$number3 = fgets($file);
fclose ($file);
$file = fopen('fres.txt', w);
fizz_buzz($number1,$number2,$number3,$file);
fclose ($file);
?>