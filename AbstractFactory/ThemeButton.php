<?php

namespace AbstractFactory;

require_once 'ButtonInterface.php';

class ThemeButton implements ButtonInterface{

	private $width;

	private $height; 

	public function __construct ($width, $height){
		$this->width = $width;
		$this->height = $height;
	}

	public function drow(){

		return "The Theme with buttons width: {$this->width}  and buttons height: 
		{$this->height} <br>";
	}

}

?>