<?php

namespace Multiton;

require_once 'MultitonTrait.php';
require_once 'MultitonInterface.php';

class Multiton implements MultitonInterface
{
	

	use MultitonTrait;


	/**
	 *  The instances of Multiton class
	 * */
	 
	 private static $instances = [];

	 private  $name;

	 /**
	  * return the instance of object was created 
	  * else we create new instance before 
	  * */

	 public static function getInstance(string $name):MultitonInterface	 
	 {
	 	if (!empty(static::$instances[$name]) and static::$instances[$name] instanceof MultitonInterface){
	 		
	  			return static::$instances[$name];
	  		}

	  		static::$instances[$name] = new static();
	  		static::$instances[$name]->setName($name);

	  		return static::$instances[$name];
	  } 

	/**
      * @param type $name
     */
     public function setName($name)
	 {
         $this->name = $name;
         return $this;
	 }     
}


?>