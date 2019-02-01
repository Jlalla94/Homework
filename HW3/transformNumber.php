<?php
function transformNumber($number){
    if (($number<15)&&($number>3))
        $number = 3;
 return ($number);
}
echo transformNumber(2);
echo transformNumber(5);
echo transformNumber(25);
