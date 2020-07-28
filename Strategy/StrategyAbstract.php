<?php

namespace Strategy;

require_once 'UserInterface.php';
require_once 'StrategyInterface.php';

/**
 *
 *  */

Abstract Class StrategyAbstract Implements StrategyInterface {

	/**
	 * default Price per hour for users  
	 * 
	 * */

	public  $pricePerHour = 10 ;

	/**
	 * Calculate how much user earns  
	 * @param UserInterface $user 
	 * @return float
	 * 
	 * */


	 public function calculate(UserInterface $user): float 	{

	 	$result = $user->getHours() * $this->pricePerHour;

	 	return $result;
	}

} 

?>