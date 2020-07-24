<?php

namespace AbstractFactory;

require_once 'ColorInterface.php';

Class ThemeColor implements ColorInterface{

	private $bgColor;

	private $tColor; 

	public function __construct($bgColor, $tColor)
	{
		$this->setBackgroundColor($bgColor)
			->setTextColor($tColor);
	}
	public function setBackgroundColor($color){
		$this->bgColor = $color;
		return $this;
	}

	public function setTextColor($color){
			$this->tColor = $color;

			return $this;	
	}

	public function drow(){

		return "The Theme with BackgroundColor: {$this->bgColor}  and TextColor: {$this->tColor} <br>";
	}

}

?>