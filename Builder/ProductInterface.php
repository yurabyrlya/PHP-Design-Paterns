<?php

namespace Builder;


interface ProductInterface {


	/**
	 * @param type $Title
	 */
	public function setTitle(string $title);

	public function setPrice(float $price);

	public function isAvailable(bool $param);
}	
	
?>