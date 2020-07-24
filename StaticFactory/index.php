<?php

 require_once 'StaticFactory.php';

 $SMSmessenger = StaticFactory::build("sms");
 $SMSmessenger->showMessage();

 echo '<hr>';

 $EmailMessenger = StaticFactory::build("email");
 $EmailMessenger->showMessage();

/**
 * if we try to create not difined messenger the aplication
 * throw an Exception
 * */

 //$SMSmessenger = StaticFactory::build("Viber");
 //$SMSmessenger->showMessage();

?>