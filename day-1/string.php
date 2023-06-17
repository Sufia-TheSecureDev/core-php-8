<?php
/*STRING */

$name = 'Sufia' ;
$fullName = "{$name} Akter";

echo $fullName .'<br>';

#HereDoc
$greet = 'hello';
$info = <<<SUFIA
HereDoc 
Greet : $greet 'i can use variable and quote "
<h>This is a Heading </h> <br>

SUFIA;
echo nl2br($info) ;

#NowDoc
$text = <<<TEXT
here i can't use 
any variable 
<h>But html</h>
TEXT;
echo nl2br($text) ;

