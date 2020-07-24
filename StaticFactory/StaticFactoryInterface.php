<?php


require_once 'MessengerInterface.php';

interface StaticFactoryInterface   
{
    public static function build(string $type): MessengerInterface;
}


?>