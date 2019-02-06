<?php
$handle = fopen ("php://stdin","r");
do{
$numb = fgets($handle);
}while(($numb%2)!=1);
for ($i=0;$i<$numb;$i++){
    $coefficient=abs((($numb-$numb%2)/2-$i));
    print (str_repeat("  ", $coefficient) . str_repeat(" *",($numb - $coefficient*2)) . PHP_EOL);
}
?> 