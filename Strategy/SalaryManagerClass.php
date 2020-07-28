<?php

namespace Strategy;


require_once 'UserInterface.php';
require_once 'StrategyInterface.php';

/**
 * Class for Manage salary  
 * */

class SalaryManager
{	
	private $worker;
	
	// strategy for current worker 
	private $strategy;

	/**
	 * Set Current Worker
	 * */

	public function __construct(UserInterface $worker)
	{
		$this->worker = $worker;
	}

	/**
	 * Calculate and return the results 
	 * 
	 * */
	public function handle()
	{

		$strategy = $this->getStrategy();
		$this->strategy = $strategy;

		$result['forPay'] = $strategy->calculate($this->worker); 
		$result['Name'] = $this->worker->getName();
		$result['Strategy'] = get_class($strategy);
		$result['PricePerHour'] = $strategy->pricePerHour;

		return $result;		
	}

	/**
	 * Get Strategy depend on work time 
	 * 
	 * */
	public function getStrategy(): StrategyInterface
	{
		$timeOfWork = ucfirst($this->worker->getTimeOfWork());

		$strategyFile ="Strategy{$timeOfWork}WorkerClass.php";  
		$strategyClass = __NAMESPACE__ ."\\Strategy{$timeOfWork}Worker";  
		
		if (file_exists($strategyFile)){

		require_once $strategyFile;
		} else {
			throw new Exception('Strategy class [{$strategyFile}] not found');
		}
	
		return new $strategyClass();		
	}
    
}



?>