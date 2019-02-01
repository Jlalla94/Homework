<?php
$file = fopen('html.txt','r');

   preg_match_all('#<name>(.+?)</name>#is', $file, $arr);
   print_r($arr);
?>
 