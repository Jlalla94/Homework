<?php
function numberstr(){
    $file_arr = file('fbstart.txt');
    $lines = count($file_arr); 
    return  $lines;   
} 
$arr = range(1,numberstr());
print_r ($arr);
function fizzbuzz($fbn){
    $arrey = range(1,$fbn[2]);
    $arrey = array_map (function ($i) use ($fbn){
    if ($i % $fbn[0] == 0) {
        if ($i % $fbn[1] == 0) {
            print("FB ");
        }
        else {
            print("F ");
        }
    }
    elseif ($i % $fbn[1] == 0){
        print("B ");
    }
    else {
       print( $i . " ");
    }
    },$arrey);
    print PHP_EOL;
}
function getfb($numb) {
$file_arr = file('fbstart.txt');
$str = $file_arr[($numb -1)];
return $lol = explode(' ', $str);
}
$arr = array_map('getfb',$arr);
print_r ($arr);
array_map("fizzbuzz",$arr);
?>