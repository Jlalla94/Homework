<?php
echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$n1 = fgets($handle);
$n2 = fgets($handle);
$n3 = fgets($handle);
$n4 = fgets($handle);
plus ($n1,$n2,$n3,$n4);
multiply($n1,$n2,$n3,$n4);
division($n1,$n2,$n3,$n4);
minus($n1,$n2,$n3,$n4);
function plus($dividend1,$divider1,$dividend2,$divider2){

   $divend1 =  $dividend1 * $divider2;
   $divend2 =  $dividend2 * $divider1;
   $divend = $divend1 + $divend2;
   $diver = $divider1 * $divider2;
   
    
    return (drob($divend,$diver));
}
function drob($a,$b){
    $k = 0;
    if ($a<0) {$a = $a * (-1); $k = 1;}
    $n = 0;
    if (($a / $b) >= 1){
        $n = ($a - ($a % $b))/ $b;
        $a = $a - ($b*$n);
    }
        for ($i=2;$i <= $a; $i++){
            if (($a % $i == 0)&&($b % $i == 0))
            {   $a = $a / $i;
                $b = $b / $i;
                $i = 1;
            }
        }
    return (print ((($k)?'-':'') . $n . " celih ". (($k)?'-':''). $a .'/'. $b . PHP_EOL));
}
function multiply($dividend1,$divider1,$dividend2,$divider2){
    $divend = $dividend1 * $dividend2;
    $diver = $divider1 * $divider2;
    return (drob($divend,$diver));
}
function division($dividend1,$divider1,$dividend2,$divider2){
    $divend = $dividend1 * $divider2;
    $diver = $divider1 * $dividend2;
    return (drob($divend,$diver));
}
function minus($dividend1,$divider1,$dividend2,$divider2){
   $divend1 =  $dividend1 * $divider2;
   $divend2 =  $dividend2 * $divider1;
   $divend = $divend1 - $divend2;
   $diver = $divider1 * $divider2;
   
    return (drob($divend,$diver)); 
}

?>