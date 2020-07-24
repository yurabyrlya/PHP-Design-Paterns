<?php

namespace AbstractFactory;

require_once 'ColorInterface.php';
require_once 'ButtonInterface.php';

interface ThemeFactoryInterface {

	public function ThemeColor($bgColor, $tColor): ColorInterface;
	
	public function ThemeButton($width, $heigt): ButtonInterface;

}


?>