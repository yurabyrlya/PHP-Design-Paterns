<?php


namespace AbstractFactory;

require_once 'WinterForm.php';
require_once 'SummerForm.php';
	

$winter  =  new WinterForm();
$winter = $winter->render();

$summer  = new SummerForm();
$summer = $summer->render();

$divide = '<br>';

echo $winter->getClassName().$divide;
echo $summer->getClassName();


?>