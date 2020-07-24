<?php


namespace AbstractFactory;

require_once 'ThemeFactoryInterface.php';
require_once 'ThemeSummerFactory.php';
require_once 'AbstractForm.php';

 Class  SummerForm  extends AbstractForm {

	 public function getTheme():ThemeFactoryInterface {

	 	return new ThemeSummerFactory();

	}

}

?>