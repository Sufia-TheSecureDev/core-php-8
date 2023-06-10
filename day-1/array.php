<?php
/* Array */

# declaration
$programingL  = ['c' , 'Java' , 'python'] ;

#access a single index
echo $programingL[1] .'<br>';

#access full array
echo '<pre>';
print_r($programingL)  ;
echo '</pre>';
echo '<br>';

#modify
$programingL[1] = 'C++';

#insert data  in last index
array_push($programingL , 'php','js');

#array length
echo count($programingL) . '<br>';

#define custom key (associate array )
$programingLanguage = [
    'php' => 'PHP',
    'js' => 'JS'
];

# add element in associative array
$keyName = 'java';
$programingLanguage[$keyName] = 'JAVA' ;

print_r($programingLanguage);
echo '<br>';

#check for key existing
var_dump(array_key_exists('java' ,$programingLanguage));
echo '<br>';


#remove element from first
array_shift($programingLanguage);
print_r($programingLanguage);

#remove element from specific index
unset($programingLanguage[0]);

#remove entire array
unset($programingLanguage);
