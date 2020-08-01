<?php

namespace Prototype;

require_once 'PublisherClass.php';


$publisher = new Publisher(1,'Publisher','Publisher Article', 'tag_publisher');

// get Prototype from Publisher object
$coppyPublisher = clone $publisher;


// We trying to compare these two objects if  they are different
var_dump($publisher);
print_r("<hr>");
var_dump($coppyPublisher);

?>