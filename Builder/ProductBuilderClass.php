<?php

namespace Builder;

require_once 'productBuilderInterface.php';
require_once 'ProductInterface.php';
require_once 'ProductClass.php';

class productBuilder implements productBuilderInterface
{
	private $product;

	public function __construct()
	{
	    $this->create();
	}    

	public function createCustomProduct(): ProductBuilderInterface{

		$this->product
		     ->setTitle('Custom Product ')
		     ->isAvailable(true);

		     return $this;
	} 
	
	public function createSpecialProduct(): ProductBuilderInterface{
		
		$this->product
		     ->setTitle('Special Product');

		     return $this;
	} 
	
	public function createFullProduct(): ProductBuilderInterface{

		$this->product
		     ->setTitle('Full product ')
		     ->setPrice(0.00)
		     ->isAvailable(true);

		     return $this;
	} 

	public function create():ProductBuilderInterface{

		$this->product = new Product();

		return $this;
	}

	public function getProduct(): ProductInterface{

		$product = $this->product;
		$this->create();

		return $product;
	} 



}

?>