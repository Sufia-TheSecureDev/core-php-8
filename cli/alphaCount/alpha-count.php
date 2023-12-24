<?php 

//way-1 to get input while file is execute
//$option = getopt('' , ['sen:']); 
//$sen = $option['sen'] ;

//way-2 to get input
$sen = $argv[1];

$chrC = 0;
foreach(str_split($sen) as $chr){ 
  if( $chr >= 'A' && $chr <= 'Z' || $chr >= 'a' && $chr <= 'z') {
    $chrC++; 
}
} 
echo $chrC;