<?php

namespace Strategy;

require_once 'UserInterface.php';
require_once 'StrategyAbstract.php';

/**
 * Clas Strategy for persons who works during day  
 *  */

 Class StrategyNightWorker extends StrategyAbstract {

 	public $pricePerHour = 14;

 	
} 

?>