<?php


namespace EventChannel;

require_once 'SubscriberInterface.php';

class Subscriber implements CustomSubscriberInterface
{
	private $name;


	public function __construct($name) {
	    	$this->name = $name;

	 }

	 public function notify($data)
	 {
		$msg = "{$this->getName()} you got notification about {$data} <br>"; 	
	 	echo $msg;

	 }
 /**
      * @return type
      */
     public function getName()
     {
         return $this->name;
     }    
}



 ?>