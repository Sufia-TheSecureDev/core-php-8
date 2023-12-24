<?php
$option = getopt('' , ['sen:']);

$sen = $option['sen'] ;
//$sen = "PHP is love!"; 
$chrC = 0;
foreach(str_split($sen) as $chr){ 
  if( $chr >= 'A' && $chr <= 'Z' || $chr >= 'a' && $chr <= 'z') {
    $chrC++; 
}
} 
echo $chrC;