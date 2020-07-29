<?php

namespace Multiton;

/**
 * Trait Multiton
 * */

trait MultitonTrait
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