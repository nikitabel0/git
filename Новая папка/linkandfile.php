<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

$a = 10 ;
$b = &$a;
echo 'b= $b <br>';

$s = 'a';
echo $$s;

$a =2 ;
$c =3; 
$b =6 ; 

list($a,$b,$c)= sum()
function sum($a, $b ,  $c){
    $arr = list($a++,$b--,$c);
    return $arr;
}



?>