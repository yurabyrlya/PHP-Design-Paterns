<?php

namespace Adapter;

require_once 'UserManagerInterface.php';

class UserManager implements  UserManagerInterface {

	public function getUserName(){
		return 'getUserName';
	}

	public function setUserName(){
		return 'setUserName';
	}
	
	public function getUserAge(){
		return 'getUserAge';
	}
	
	public function setUserAge(){
		return 'setUserAge';
	}
}

