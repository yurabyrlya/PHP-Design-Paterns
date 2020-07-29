<?php

namespace Multiton;

require_once 'MultitonClass.php';


// try to get Multiton instance 
$mysql = Multiton::getInstance('MySQL');
$MSSql = Multiton::getInstance('MSSql');
$postgresql = Multiton::getInstance('postgresql');
	

$mysql1 = Multiton::getInstance('MySQL');
$mysql2 = Multiton::getInstance('MySQL');
$mysql3 = Multiton::getInstance('MySQL');


var_dump($mysql === $mysql3);

//trying  to check if these objects are different   
var_dump($MSSql);
var_dump($postgresql);


?>