<?php
#match is a strict comparison

$paymentStatus = 3;
match($paymentStatus){
    1   => print 'paid',
    2,3 => print 'payment Declined',
    0   => print 'pending'
};

echo '<br>';
#another way
$day = 3;
$dayName = match($day){
    1       =>  'Saturday',
    2       =>  'Sunday',
    3       =>  'MOnday',
    4       =>  'Tuesday',
    5       =>  'Wednesday',
    6       =>  'Thursday',
    7       =>  'Friday',
    default => 'sorry'
};
echo $dayName;