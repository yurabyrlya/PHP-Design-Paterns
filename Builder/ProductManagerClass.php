<?php

namespace Builder;

require_once 'ProductBuilderInterface.php';
require_once 'ProductInterface.php';

class ProductManager
{
    
    private $builder;

    public function __construct(ProductBuilderInterface $builder)
    {
    	$this->builder = $builder;
    }

    public function createCustomProduct()
    {
    	$this->builder->createCustomProduct();

    	return $this;
    }

    public function createSpecialProduct()
    {
    	$this->builder->createSpecialProduct();

    	return $this;
    }


    public function createFullProduct()
    {
        $this->builder->createFullProduct();

        return $this;
    }

    public function getProduct(): ProductInterface{

		return $this->builder->getProduct();
	} 

}


?>