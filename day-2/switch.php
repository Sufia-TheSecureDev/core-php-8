<?php
$score = 4.50 ;

switch ($score){
    case $score === 5.00:
        echo 'A+';
        break;
    case $score>= 4.00:
        echo 'A' ;
        break;
    case $score >= 3.00:
        echo 'A-';
        break;
    case $score >= 1.00:
        echo 'pass';
        break;
    default:
        echo 'Fail';
}