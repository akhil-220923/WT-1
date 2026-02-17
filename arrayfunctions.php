<?php
$fruits=['apple','orange','pear'];
// echo count($fruits);
// echo "<br>";

// var_dump(in_array('oranges',$fruits));

$fruits[]='grape';
array_push($fruits,'blueberry','strawberry','guava');
array_unshift($fruits,'mango');
array_pop($fruits);
array_shift($fruits);
//unset($fruits[2]);


// foreach($fruits in $fruit){
//     echo $fruit;
// }

// $chunked_array=array_chunk($fruits,3);
// print_r($chunked_array);
// print_r($fruits);
// echo"<br>";
// echo $fruits[3];

$arr1=[1,2,3];
$arr2=[4,5,6];
$arr3=array_merge($arr1,$arr2);
$arr4=[...$arr1,...$arr2];
//print_r($arr4);

$a=['green','red','yellow'];
$b=['avacado','apple','banana'];
$c=array_combine($a,$b);
// print_r($c);
$keys=array_keys($c);
print_r($keys);
echo "<br>";

$flipped=array_flip($c);
// print_r($flipped);

$numbers=range(1,30);
// print_r($numbers);

$newNumbers=array_map(function($number){
    return "Number ${number}";



},$numbers);
// print_r($newNumbers);

$lessThan10=array_filter($numbers,fn($number)=>
$number<=10);
// print_r($lessThan10);

$sum=array_reduce($numbers,fn($carry,$number)=>
$carry + $number);
var_dump($sum);
?>