<?php 

namespace EventChannel;


require_once 'PublisherInterface.php';

require_once 'EventChannelInterface.php';

class Publisher implements PublisherInterface {
	
	private $topic;

	private $event;


	public function __construct($topic , EventChannelInterface $event)
	{
		$this->topic = $topic;
		$this->event = $event;
	}


	public function publish($data)
	{
		 $this->event->publish($this->topic, $data);
	}

}


?>