# core-php-8

## Day 1 :
 - constant variable  with
    -  ```define() method [define(VAR_NAME , value) ] ``` 
    - ```const keyword [ const VAR_NAME = value]```
- Data Type 
    - 4 scalar data type
        - bool -> true/false
        - int -> 1 ,2,3
        - float -> 3.44 , 1.2
        - string -> 'a' , "hello world"
    - 4 compound data type
        - array  -> [int , string , float]
        - object
        - callable
        - iterable
    - 2 compound type 
        - resource
        - null ( $param = null;)
- Type hint 
```
 function sum( int $x , int $y)
 { 
    // here int is used for hint that $x parameter will be an integer variable
 }
 sum('3.3' , 3);
 ```

 - Strict Type  
 ```
 declare(strict_type=1);

 // now php will throw an error if arguments are not match with the declared type hint 
 ```

 - Type Cast
 ```
 $x = (int)'4'; // though 4 is define as string but it will be cast into int variable.
 ```

 - Falsy value 
 ```
 integers 0 / -0 = false
 floats 0.0 / -0.0 = false 
 empty string '' =  false 
 zero also string '0' = false 
 empty array [] = false
 null = false
 ```

 - some built in function 
 ```
 $x = 3 ;

 is_int($x);
 is_float($x);
 is_bool($x);
 is_finite($x);
 is_infinite($x);
 is_nan($x);

 $y = 3.44 ;
 floor($y);  // 3
 ceil($y);  // 4
 round($y) ; // 3


 ```

 - String 
 ```
 declaration : 
     $name = 'Sufia';
     $fullName = "{$name} Akter ";

Accessing : 
    echo $name[2] ; // f

HereDoc : 
    $greet = 'hello';
    $info = <<<TEXT 
    Greet : $greet 'i can use variable and quote "
    <h>This is a Heading </h>
    TEXT;
    echo nl2br($info) ;

NowDoc : 
    $text = <<<TEXT
    here i can't use 
    any variable 
    <h>But html</h>
    TEXT;
    echo nl2br($text) ;
 ```

 - Array
 ```
Declaration :
    $programingL  = ['c' , 'Java' , 'python'] ;
 Accessing : 
    $programingL[1] ;
 Modify :
    $programingL[1] = 'C++';
insert in last :
    array_push($programingL , 'php','js');
array length check :
     count($programingL) ;
associate array :
    $programingLanguage = [
    'php' => 'PHP',
    'js' => 'JS'
];


array_key_exist ()  // check a key exist or not
array_shift()  // element remove from beginning
array_pop()  // element remove from last 
unset($programingL[3])  //element remove from specific index 
unset($programingL)   // remove entire array 
 ```