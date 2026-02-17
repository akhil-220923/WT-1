<?php

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');

    }
    return 1/$x;

}



try{
    echo inverse(5);
    echo inverse(2);
    echo inverse(0);
  


}catch(Exception $e){
    echo 'Caught Exception',$e->getMessage(),'';

}finally{
    echo 'First Finally';
}

try{
    echo inverse(0);
   
}catch(Exception $e){
    echo 'Caught Exception',$e->getmessage(),'';
}finally{
    echo 'Seond Finally';
}



?>