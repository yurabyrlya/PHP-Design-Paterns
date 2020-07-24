<?php

require_once 'MessengerInterface.php';
require_once 'EmailMessenger.php';
require_once 'SmsMessenger.php';



class AppMessenger implements MessengerInterface
{
    
    protected $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail()
    {
        $this->messenger = new EmailMessenger();
     
        return $this->messenger;
    }

    public function toSMS()
    {
        $this->messenger = new SmsMessenger();
     
        return $this->messenger;
    }

   public function setSender($value): MessengerInterface  
   {
   		$this->messenger->setSender($value);

   		return $this->messenger;
   }

	
	public function setRecipient($value): MessengerInterface
	{
		$this->messenger->setRecipient($value);

   		return $this->messenger;
	}


	public function setMessage($value): MessengerInterface
	{
		$this->messenger->setMessage($value);

   		return $this->messenger;
	}

	  public function showMessage(): MessengerInterface
    {

    	$this->messenger->showMessage();

    	return $this->messenger;
    }
}



?>