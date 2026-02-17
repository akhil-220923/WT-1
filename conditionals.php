<?php
// $age=20;
// if($age>= 18){
//     echo 'you are eligible to vote';
// }
// else{
//     echo 'sorry ,you are not eligible to vote';
// }

 $t=date("H");
// if($t < 12){
//     echo 'good morning';
// }
// elseif($t < 17){
//     echo 'good afternoon';
// }
// else{
//     echo 'good evening';

// }
$posts=[];

// if(!empty($posts)){
//     echo $posts[0];
// }
// else{
//     echo 'No Posts';
// }
//echo !empty($posts) ? $posts[0]:'No Posts';


//$firstpost=!empty($posts) ? $posts[0]:'No Posts';
//$firstpost=!empty($posts) ? $posts[0]: null;
// $firstpost=$posts[0] ?? null;
// echo $firstpost;

$favcolor='blue';
switch($favcolor){
    case 'yellow':
        echo 'your favourite colour is pink';
        break;
    case 'red':
        echo 'your favourite colour is red';
        break;
    case 'green':
        echo 'your favourite colour is green';
        break;
    default:
    echo'your favourite is not pink,red or green';
    

}

?>