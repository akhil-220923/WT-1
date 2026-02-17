<?php
$numbers=[1,44,55,22];
$fruits=array('apple','orange','grapes','pears');

/*print_r($numbers);
var_dump($numbers);
print_r($fruits);
echo $fruits[0];
print_r($fruits[1]);
echo $fruits[2];*/

/*$colors=[
    1=>'pink',
    4=>'blue',
    6=>'red',
];
print_r($colors);
echo $colors[1];
print_r($colors[4]);
echo $colors[6];*/

$hex=[
    'red'=>'#f00',
    'green'=>'#0f0',
    'blue'=>'#00f'
];
print_r($hex);
echo $hex['blue'];

$people=[
    'first_name'=>'Brad',
    'last_name'=>'Traversy',
    'email'=>'brad@gmail.com'

];
print_r($people);

$people=[
    ['first_name'=>'Brad',
    'last_name'=>'Traversy',
    'email'=>'brad@gmail.com'
    ],

    [
    'first_name'=>'John',
    'last_name'=>'Doe',
    'email'=>'john@gmail.com'

],
[
    'first_name'=>'Jane',
    'last_name'=>'Doe',
    'email'=>'jane@gmail.com'

]


];

//echo $people[2]['last_name'];
//echo $people[1]['email'];
var_dump(json_encode($people));



   

?>