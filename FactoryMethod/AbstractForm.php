<?php


namespace AbstractFactory;

require_once 'ThemeFactoryInterface.php';
require_once 'AbstractFormInterface.php';

Abstract Class  AbstractForm  implements  AbstractFormInterface {

    public function render(){

    	$theme = $this->getTheme();

    	return $theme;

    }

	Abstract public function getTheme(): ThemeFactoryInterface ;

}

?>