<?php
$arr = [
	[1,2,4,5,3,2],
	[2,3,2,2,1,1],
	[1,2,2,3,4,5]
];
$idx1 = 0;
$idx2 = 0;
$way[0][0] = $idx1;
$way[0][1] = $idx2;
$k= 1;
do{
for ($i=($idx1-1);$i != ($idx1+2);$i++){
    for ($j=($idx2-1);$j != ($idx2+2);$j++){
        print_r ($max . ' ' . $arr[$i][$j] . $i. '_'. $j);
        if ($max<$arr[$i][$j]) {
            $max = $arr[$i][$j];
            $way[$k][0] = $i;
            $way[$k][1] = $j;
        }
    }
}
    $idx1=$way[$k][0];
    $idx2=$way[$k][1];
    $k++;
    print_r('!!!!'. $k .'!!!!' );
}while (($way[$k-1][0]!=$way[($k-2)][0])&&($way[$k-1][1]!=$way[($k-2)][1]));
print_r ($way);
?>