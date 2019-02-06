<?php
function del($a,$b){
return (($a-$a%$b)/$b);
}
$handle = fopen ("php://stdin","r");
$kolet=fgets($handle);
$kolkv=fgets($handle);
$numb = fgets($handle);
print ('podezd'.(del(($numb-1),($kolkv*$kolet)) + 1).'etaj'.(del((($numb-1)%($kolkv*$kolet)),$kolkv)+1));
?> 