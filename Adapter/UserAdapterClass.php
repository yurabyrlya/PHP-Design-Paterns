<?php

namespace Adapter;

require_once 'UserManagerClass.php';
require_once 'UserInterface.php';

Class UserAdapter implements UserInterface {

	private $userManager;

	public function __construct()
	{
		$this->userManager = new UserManager();
	}

	public function getName(){
	    return $this->userManager->getUserName();
	}

	public function setName(){
		return $this->userManager->setUserName();
	}
	
	public function getAge(){
		return $this->userManager->getUserAge();
	}
	
	public function setAge(){
		return $this->userManager->setUserAge();
	}
}

