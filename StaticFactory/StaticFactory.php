<?php

require_once 'MessengerInterface.php';
require_once 'StaticFactoryInterface.php';
require_once 'AppMessenger.php';


class StaticFactory implements StaticFactoryInterface   
{
    
    public static function build(string $type = 'email'): MessengerInterface
    {
        
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                    $messenger->toEmail();
                    $sender  = 'EmailSender';    
                break;
            case 'sms':
                    $messenger->toSMS();
                    $sender  = 'SMSSender';
                break;
            
            default:
                throw new Exception("the messenger with  type:[{$type}} not found");
                break;            
        }

        $messenger->setSender($sender)
                  ->setMessage('Default message'); 
 
        return $messenger;   
    }
}


?>