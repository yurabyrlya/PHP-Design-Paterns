<?php

	require_once 'AppMessenger.php';

	$messenger = new AppMessenger();
	$messenger->setSender('yurabyrlya')
			->setRecipient('Alex')	
			->setMessage('This Test Message')	
			->showMessage();

	echo "<br>+++++++++++++++++++++++++++++++++++++++<br>";
	
	$messenger2 = new AppMessenger();			
	$messenger->toSms()
			->setSender('yurabyrlya')
			->setRecipient('Alex')	
			->setMessage('This Test Message')
			->showMessage();	

?>