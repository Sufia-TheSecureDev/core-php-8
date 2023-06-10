<?php

# MY_NAME constant define at compile time
const MY_NAME = 'sufia' ;
echo MY_NAME . PHP_EOL;

# UPDATED_NAME constant will be defined at runtime
# can use in loop/control structure
if (true){
    define('UPDATED_NAME' , 'sania') ;
    echo UPDATED_NAME . PHP_EOL;
}

// predefine constant
echo 'php version: ' . PHP_VERSION ;

//magic constant ex __LINE__ and __File__
echo '<br>Magic method is used in line no  : '. __LINE__ .' also file name is : '.__FILE__;
echo __DIR__;