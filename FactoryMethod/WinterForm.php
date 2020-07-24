<?php


namespace AbstractFactory;

require_once 'ThemeWinterFactory.php';
require_once 'ThemeFactoryInterface.php';
require_once 'AbstractForm.php';

 Class  WinterForm  extends AbstractForm {

	 public function getTheme(): ThemeFactoryInterface {

	 	return new ThemeWinterFactory();

	}

}

?>