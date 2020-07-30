<?php

namespace Builder;

require_once 'ProductInterface.php';

interface ProductBuilderInterface {

	public function createCustomProduct(): ProductBuilderInterface; 
	
	public function createSpecialProduct(): ProductBuilderInterface; 
	
	public function createFullProduct(): ProductBuilderInterface;

	public function create(): ProductBuilderInterface; 

	public function getProduct(): ProductInterface; 


	
}


?>