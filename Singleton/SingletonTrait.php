<?php

namespace Singleton;

/**
 * Trait Singleton
 * */

trait SingletonTrait
{
	
	/**
	 * protect if we try create with 'New' the instance
	 * */

	private function __construct(){ }

	/**
	 * protect if we try clone the instance
	 * */
	
	private  function __clone (){ }  

	/**
	 * protect from serealizing the instance
	 * */

	private  function __wakeup (){ }   
}

?>