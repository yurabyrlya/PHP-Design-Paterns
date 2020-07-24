<?php


namespace AbstractFactory;

require_once 'ThemeFactoryInterface.php';

interface AbstractFormInterface {

	public function render();

	public function getTheme(): ThemeFactoryInterface ;

}

?>