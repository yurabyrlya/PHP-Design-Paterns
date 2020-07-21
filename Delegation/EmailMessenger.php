<?php

require_once 'AbstractMessenger.php';



class EmailMessenger extends AbstractMessenger
{
    
    public function setMessage($value): MessengerInterface
    {
		$value = "{$value} sent by E-mail";

        return parent::setMessage($value);
    }


    public function showMessage(): MessengerInterface
    {
        echo $this->message;

    	return parent::showMessage();
    }
}




?>