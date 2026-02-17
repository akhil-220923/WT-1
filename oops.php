<?php

class User{
    public $name;
    public $email;
    public $password;

    // public function __construct($name,$email,$password){
    //     echo 'constructor ran';
    // }
    public function __construct($name,$email,$password){
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;

     }


    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
       
    }

}


$user1 = new User('Brad','brad@gmail.com','34344');
$user2=new User('John','john@gmail.com','ddod99');

echo $user2->email;
echo $user2->name;


class Employee extends User{
    public function __constructor($name,$email,$password,$title){
        parent::__constructor($name,$email,$password);
        $this->title=$title;


    }
    public function get_title(){
        return $this->title;
    }
}


$employee1 = new Employee('John','johndoe@gmail.com','123456','Manager');
echo $employee1->get_title();
// $user1->set_name('Brad');
// $user2->set_name('John');


// echo $user1->get_name();
// echo $user2->get_name();
//  $user1->name='Brad';





// var_dump($user1);
// echo "<br>";
// var_dump($user2);


// echo $user1->name;


?>
