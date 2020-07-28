<?php

namespace Strategy;

require_once 'SalaryManagerClass.php';
require_once 'UserClass.php';

$worker = new User();

$salary = new SalaryManager($worker);
$result = $salary->handle();

var_dump($result);

?>