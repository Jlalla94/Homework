<?php
$handle = fopen("php://stdin","r");
do
{
    echo "Give me first number please\n";
    $fizz = fgets($handle);
}while (($fizz / $fizz != 1)||(($fizz * 10) % 10));
do
{
    echo "Give me second number please\n";
    $buzz = fgets($handle);
}while (($buzz / $buzz != 1)||(($buzz * 10) % 10));
do
{
    echo "Give me last number please\n";
    $limit = fgets($handle);
}while (($limit / $limit != 1)||(($limit * 10) % 10));
for ($i = 0;$i++ < $limit;)
{
    if ($i % $fizz == 0) {
        if ($i % $buzz == 0) {
            echo "FB ";
        }
        else {
            echo "F ";
        }
    }
    elseif ($i % $buzz == 0){
        echo "B ";
    }
    else {
        echo "$i ";
    }
}
?>