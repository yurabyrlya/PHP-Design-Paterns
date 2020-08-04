<?php

namespace Adapter;

require_once 'UserAdapterClass.php';
require_once 'CustomUserManagerClass.php';

// We can choose any User instance and look the different results
    
//$user = new CustomUserManager();
$user = new UserAdapter(); 

$results = [];

$results[] = $user->getName(); 
$results[] = $user->setName(); 
$results[] = $user->setAge(); 
$results[] = $user->getAge(); 

var_dump($results);
