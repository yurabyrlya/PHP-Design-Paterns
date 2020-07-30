<?php

namespace Builder;

require_once 'ProductInterface.php';

class Product implements ProductInterface
{
   
	private $title;

	private $price;

	private $available = false;

	/**
	 * @param type $Title
	 */
	public function setTitle(string $title)
	{
	    $this->title = $title;
	    return $this;
	}


	/**
	 * @param type $price
	 */
	public function setPrice(float $price)
	{
	    $this->price = $price;
	    return $this;
	}


	/**
	 * @param type $available
	 */
	public function isAvailable(bool $available)
	{
	    $this->available = $available;
	    return $this;
	}

}





?>