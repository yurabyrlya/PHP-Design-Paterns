<?php

require_once 'AbstractMessenger.php';


class SmsMessenger extends AbstractMessenger
{
    
    public function setMessage($value): MessengerInterface
    {
		$value = "{$value} sent by SMS";

        return parent::setMessage($value);
    }


    public function showMessage(): MessengerInterface
    {
        echo $this->message;

    	return parent::showMessage();
    }
}


?>