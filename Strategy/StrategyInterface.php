<?php

namespace Strategy;

require_once 'UserInterface.php';

/**
 * Strategy Interface 
 * */

Interface StrategyInterface {

	/**
	 * @param UserInterface $user 
	 * @return float
	 * */

	public function calculate(UserInterface $user): float;

} 

?>