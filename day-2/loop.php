<?php
#while
$i = 0 ;
while($i <=10){
    echo $i++ . ' ' ;
}
echo '<br>';

#do-while
$i = 5;
do{
    echo $i++ . ' ';
}while($i<=10 );
echo '<br>';

#for
for($i=1 ; $i<=10; $i++){
    echo $i. ' ' ;
}
echo '<br>';

#foreach
$array = [4 , 5 , 3 , 6 ] ;
foreach($array as $key=> $item){
    echo $key .'=> '. $item . ' ';
}
echo '<br>';


$newA = [
    'name'=> 'sufia',
    'email'=> 'sufia.iiuc03@gmail.com',
    'skills'=> ['c' ,'c++','php','python']
];
// way 1 to access newA values
foreach ($newA as $key => $item){
    echo $key.':' , json_encode($item).'<br>';
}
echo '<br>';

// way 2 to access newA values
foreach ($newA as $key => $item){
    if (is_array($item)){
        $item = implode(', ',$item);
    }
    echo $key.':' , $item.'<br>';
}
echo '<br>';

// way 3 to access newA values
foreach ($newA as $key => $item){
    echo $key . ': ' ;
    if (is_array($item)){
       foreach ($item as $value){
           echo $value. ', ' ;
       }
    }else{
        echo  $item.'<br>';
    }

}
echo '<br>';