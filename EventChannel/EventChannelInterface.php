<?php

namespace EventChannel;

require_once 'SubscriberInterface.php';

 interface EventChannelInterface {


 	public function publish($topic , $data);


 	public function subscribe($topic , CustomSubscriberInterface $subscriber);

 }
	


?>