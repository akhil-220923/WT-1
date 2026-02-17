<?php
$string='Hello World';
echo strlen($string);
echo "<br>";
echo strpos($string,'o');
echo "<br>";
echo strrpos($string,'o');
echo "<br>";
echo strrev($string);
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo substr($string,0,5);
echo "<br>";
echo substr($string,5);
echo "<br>";
echo ucwords($string);
echo "<br>";
echo str_replace('World','Everyone',$string);
echo "<br>";
if(str_starts_with($string,'Hello')){
    echo 'YES';
}
echo "<br>";
if(str_ends_with($string,'ld')){
    echo 'YES';
}

echo "<br>";
//$string2='<h1>Hello</h1>';
$string2='<script>alert(1)</script>';
echo $string2;
echo htmlspecialchars($string2);

printf('%s likes to %s','Brad','code');
printf('1+1=%d',1+1);
echo "<br>";
printf('1+1=%f',1+1);




?>