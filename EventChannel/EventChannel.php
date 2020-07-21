<?php
 
namespace EventChannel;

require_once 'EventChannelInterface.php';

 Class EventChannel implements EventChannelInterface {

 	private $topic = [];

	public function publish($topic , $data){

		if (empty($this->topic[$topic])){
			return ; 
		}
	

		foreach ($this->topic[$topic] as $subscriber) {
		    $subscriber->notify($data);
		}

	}


 	public function subscribe($topic , CustomSubscriberInterface $subscriber){

		$this->topic[$topic][] = $subscriber; 

		$msg = "{$subscriber->getName()}  followed on {$topic}<br>"; 

		echo $msg;
 	}

 }
	


?>