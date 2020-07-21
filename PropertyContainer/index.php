<?php

include_once 'PropertyContainer.php';


/**
 * 
 */
class User extends PropertyContainer
{
	
	private $name;


	public function setName($value)
	{
		$this->name = $value;

	}

	public function getName()
	{
	    return $this->name;
	}


}

$user = new User();

$user->setName('John');

$user->addProperty('age', 19);
$user->setProperty('age', 190);

$user->addProperty('high', 187);

var_dump($user->getName()."<br>");
var_dump($user->getProperty('age')."<br>");

?>

