<?php
function createTea($geta){
    print ( "\r\n" .$geta . "\r\n");
    print (rand(0,1) ? "yes" : "no" );
}
createTea("Green");
createTea("Red");
createTea("Black");
