<?php
echo "Give it to me!\n";
$handle = fopen("php://stdin","r");
$number = fgets($handle);

switch (($number>10) + ($number > 100) - ($number == 100)) {
    case 2:{
        echo "Thanks, man!";
        break;
    }
    case 1:{
        echo "OK :(";
        break;
    }
    case 0:{
        echo "WHAAAAT????";
        break;
    }  
}
echo "\n";        
switch ($number > 1000) {
    case 1:{
        echo "\n!!!!WOOOOWWWW!!!\n";     
        break;
    }
} 