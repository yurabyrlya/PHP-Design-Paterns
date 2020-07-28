<?php

namespace Strategy;

/**
 * User userInterface   
 * */

Interface UserInterface {

	/**
	 * 	Get user name
	 * 	@return string; 
	 * */

	public function getName():string; 

	/**
	 * Get worked hours of user
	 * @return Int;
 	* */

	public function getHours():int;

	/**
	 *  get information about  time  when user worked (daily|night)
	 * */
	public function getTimeOfWork():String;



} 

?>