<?php

namespace AbstractFactory;

require_once 'ThemeColor.php';
require_once 'ThemeFactoryInterface.php';
require_once 'ColorInterface.php';
require_once 'ButtonInterface.php';
require_once 'ThemeButton.php';

Class ThemeWinterFactory implements ThemeFactoryInterface {

	public function ThemeColor($bgColor, $tColor): ColorInterface {

		return new ThemeColor ($bgColor, $tColor);
	}
	
	public function ThemeButton($width, $height): ButtonInterface {

		return new ThemeButton ($width, $height);
	}


	public function getName(){

		return ' Winter Theme ';
	}


	public function getClassName(){

		return self::class;
	}

}


?>