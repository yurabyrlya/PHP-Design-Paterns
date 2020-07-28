<?php

namespace Strategy;

require_once 'UserInterface.php';
/**
 * User Class   
 * */

Class User implements  UserInterface {

	/**
	 * 	Get user name
	 * 	@return string; 
	 * */

	public function getName(): string{

		$names = [
			'Mike',
			'Alex',
			'John',
			'Marta' 
		];

		return $names[rand(0,3)];
	} 

	/**
	 * Get worked hours of user
	 * @return Int;
 	* */

	public function getHours():int {

		$hours = [28,45,98,160,];

		return $hours[rand(0,3)];
	}

	/**
	 * @return String;
	 * */

	public function getTimeOfWork():String {

	$type = ['day','night'];
		
		return $type[rand(0,1)];
	}

} 

?>