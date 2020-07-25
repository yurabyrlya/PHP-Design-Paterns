<?php

namespace Singleton;

require_once 'SingletonTrait.php';

class Singleton
{
	

	use SingletonTrait;


	/**
	 *  The instance singleton
	 * */
	 
	 private static $instance;


	 /**
	  * return the instance of class if exist 
	  * else we create new instance before 
	  * */

	 public static function getInstance()
	  {
	  		return static::$instance?? (static::$instance = new static());
	  }      
}


?>