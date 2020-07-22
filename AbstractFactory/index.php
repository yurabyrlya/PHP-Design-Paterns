<?php


namespace AbstractFactory;

require_once 'Theme.php';
	
$Theme = new Theme();

$winter  = $Theme->setTheme('winter');
$summer  = $Theme->setTheme('summer');

?>