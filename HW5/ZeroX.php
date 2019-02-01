<?php

function generate(&$arr) {
  $arr = array_merge(array_fill(0, 5, 'X'), array_fill(5, 4, '0'));
  shuffle($arr);
}

function field($arr) {
  for ($i=0; $i < 9; $i++) { 
    print($arr[$i]?'X':'O');
    print " ";
    if(in_array($i, [2, 5, 8])) print(PHP_EOL);
  }
  return true;
}

function check($arr){
  foreach ([0,3,6] as $first) {
    if (($first == 0)&&($arr[$first] != 0)&&($arr[($first+1)*4] != 0 )&&($arr[($first+2)*4] != 0 ))
    { print "We have found Diagonal!";
          print PHP_EOL . $first + 1 . PHP_EOL;
        
    }
     if($arr[$first]){
      if($arr[$first + 1]){
        if($arr[$first + 2]){
          print "We have found Horizontal!";
          print PHP_EOL . $first/3 + 1 . PHP_EOL;
        }
      }
    }
  }


  foreach ([0,1,2] as $first) {
    if (($first == 1)&&($arr[$first*2])&&($arr[($first+1)*2])&&($arr[($first+2)*2])) 
    { print "We have found Diagonal!";
          print PHP_EOL . $first + 1 . PHP_EOL;
        
    }    
    if($arr[$first]){
      if($arr[$first + 3]){
        if($arr[$first + 6]){
          print "We have found Vertical!";
          print PHP_EOL . $first + 1 . PHP_EOL;
            
        }
      }
    }
  }    
}

generate($arr);
field($arr);
check($arr);