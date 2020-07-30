<?php

namespace Builder;

require_once 'productBuilderClass.php';
require_once 'productManagerClass.php';

$productBuilder = new productBuilder();

$productManager = new ProductManager($productBuilder);
$customProduct = $productManager
			->createCustomProduct()
			->getProduct();

$specialProduct = $productManager
			->createSpecialProduct()
			->getProduct();

$fullProduct = $productManager
			->createFullProduct()
			->getProduct();


var_dump($customProduct);
var_dump($specialProduct);
var_dump($fullProduct);

var_dump($customProduct->setTitle('Custom Product updated'));
?>