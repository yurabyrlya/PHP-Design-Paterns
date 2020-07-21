<?php
 
namespace EventChannel;


require_once 'Publisher.php';	
require_once 'Subscriber.php';	
require_once 'EventChannel.php';


$event = new EventChannel();

$UKNews = new Publisher('UKnews', $event); 
$italyNews = new Publisher('ITnews', $event); 
$MDNews = new Publisher('MDnews', $event); 

$iuri = new Subscriber('Iuri');
$alex = new Subscriber('Alex');
$John = new Subscriber('John');


$event->Subscribe('UKnews', $iuri);
$event->Subscribe('MDnews', $iuri);
$event->Subscribe('ITnews', $iuri);

$event->Subscribe('ITnews', $alex);

$event->Subscribe('UKnews', $John);

$UKNews->publish(' upadated UK News');
$MDNews->publish(' upadated MD News');
$italyNews->publish(' upadated Italy News');

?>