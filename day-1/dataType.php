<?php
/*Data type and type casting */

# 4 scalar data type

    #bool -> true/false
    $isStudent = true;
    #int -> 1 ,2,3
    $age = 25 ;
    #float -> 3.44 , 1.2
    $cgpa = 3.71 ;
    #string -> 'a' , "hello world"
    $name = "sufia" ;

    echo '<br>';
    echo $age . '<br>';
    echo $cgpa . '<br>';
    echo $name . '<br>';

    echo gettype($isStudent);
    echo '<br>';


# 4 compound data type

    #array  -> [int , string , float]
    $semesterResult = [3.73 , 3.59 , 3.95];
    print_r($semesterResult);

    #object
    #callable
    #iterable

    echo '<br>';


#2 special type
    #resource
    #null
    $param = null;
    echo gettype($param);
    echo '<br>';


#Type strict
declare(strict_type=1) ;

#type hint
function sum(int $x , int $y){
    return $x+$y;
}
echo sum(3 , 5);
echo '<br>';

#type cast
$x = (int)'4';
var_dump($x);