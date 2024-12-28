<?php

// class Person
// {
//     public $name;
//     public $age;
//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function display()
//     {
//         return $this->name . $this->age;
//     }
// }
// $info = new Person('najmul', '28');
// echo $info->display();
// echo "<br>";
// $a = new Person('hasan', '30');

// echo $a->display();

// class Access
// {
//     public $name;
//     protected $age;
//     private $address;

//     public function hhhhh()
//     {
//         return 'this is private access';
//     }
// }

// $info = new Access();
// echo $info->hhhhh();


//inheritance
// class Person
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function display()
//     {
//         return $this->name . ' ' . $this->age;
//     }
// }

// class Son extends Person
// {
//     public $address;
//     public function __construct($name, $age, $address)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//     }

//     public function message()
//     {
//         return $this->name . ' ' . $this->age . ' ' . $this->address;
//     }
// }

// $info = new Person('Najmul', '20');
// echo $info->display();
// echo '<br>';
// $check = new Son('Najmul', '20', 'dhaka');
// echo $check->message();

// class Person
// {
//     const NAME = "rahim mia";

//     function check()
//     {
//         return self::NAME;
//     }
// }

// $test = new Person;
// echo $test->check();

//interface
// interface Person
// {
//     public function makeVideo();
// }

// class TV implements Person
// {
//     public function makeVideo()
//     {
//         echo 'hi';
//     }
// }
// class gMusic implements Person
// {
//     public function makeVideo()
//     {
//         echo 'g music';
//     }
// }

// class mMusic implements Person
// {
//     public function makeVideo()
//     {
//         echo ' m music';
//     }
// }
// $tv = new TV;
// $gmusic = new gMusic;
// $mmusic = new mMusic;

// $data=array($tv,$gmusic,$mmusic);
// foreach ($data as $key => $value) {
//    echo $value->makeVideo(). '<br>';
// }


//trait
// trait Person{
//     public function name(){
//         echo 'person is the name';
//     }
// }
// trait Son{
//     public function age(){
//         echo 'so is the kisu na';
//     }
// }
// class display{
//     use Person;
//     use Son;
// }

// $info = new display;
// $info->age();

// class product
// {
//     static public $pname = "Book";

//     public function info()
//     {
//         return "Product Name :" . self::$pname;
//     }
// }

// $pinfo =  new product;
// echo $pinfo->info();


// static method an property
// class message
// {
//     public static function welcome(){
//         echo 'Welcome';
//     }
// }
// class otherClass extends message
// {
//     public function welcomeMessage(){
//         parent::welcome();
//     }
// }   

// $msg= new otherClass();
// $msg->welcomeMessage();