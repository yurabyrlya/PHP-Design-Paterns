<?php

namespace Adapter;

require_once 'UserInterface.php';

Class CustomUserManager implements UserInterface {

	public function getName(){
		return 'getName';
	}

	public function setName(){
		return 'setName';
	}
	
	public function getAge(){
		return 'getAge';
	}
	
	public function setAge(){
		return 'setAge';
	}
}
