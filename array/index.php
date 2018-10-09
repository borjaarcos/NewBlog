<?php
$var=array('a','b','c');
//print_r($var);
//printa estructura array. Array ( [0] => a [1] => b [2] => c ) 
echo $var[1];
$var[]='d';
//mejemos 'd' al final del array
$asoc=[
    'nombre'=>'Dani',
    'apellidos'=>'Gonzalez',
    'edad'=>33
];
// echo $asoc['nombre'];
//array asociativo
foreach ($asoc as $key=>$value){
    echo $key .':'.$value.'<br>';
}