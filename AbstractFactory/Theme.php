<?php


namespace AbstractFactory;


require_once 'ThemeWinter.php';
require_once 'ThemeSummer.php';


class Theme 
{
    
    public function setTheme($theme)
    {
    	switch ($theme) {
    		case 'winter':
    				$theme = $this->getWinterTheme();			
    			break;
    		case 'summer':
    				$theme = $this->getSummerTheme();			
    			break;
    		
    		default:
    			throw new Exeption('Theme with name [{$theme}] not found');
    			break;
    	}
     return $theme;	
    }

   public function getWinterTheme()
    {
		

		$theme = new ThemeWinter();
		echo $theme->getName().'<hr>';
    	echo $theme->ThemeColor('white', 'Black')->drow();
    	echo $theme->ThemeButton(100, 200)->drow();

    	return $theme;
    	
    }
     public function getSummerTheme()
    {
		
		$theme = new ThemeSummer();
		echo $theme->getName().'<hr>';
		echo $theme->ThemeColor('Red', 'White')->drow();
		echo $theme->ThemeButton(150, 225)->drow();
      
    	return $theme;

    } 

}


?>