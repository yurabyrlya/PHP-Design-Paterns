<?php

namespace Singleton;

require_once 'SingletonClass.php';


// trying get Singleton instance 
$Singleton1 = Singleton::getInstance();
$Singleton2 = Singleton::getInstance();

//trying  to check if these objects are equals   
var_dump($Singleton1 === $Singleton2);

//$Singleton3 = new Singleton();

//trying  to check if these objects are equals   
//var_dump($Singleton1 === $Singleton3);

//trying  to get a clone of object
//$Singleton4 = clone $Singleton1;
//var_dump($Singleton1 === $Singleton4);

//trying  to serializing the object
//$Singleton5 = serialize ($Singleton1);
//$Singleton5 = unserialize($Singleton5);
//var_dump($Singleton5 === $Singleton1);

?>