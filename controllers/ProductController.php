<?php

use models\Category;
use models\Product;

class ProductController {

    public function actionView($productId){

    	$prdct = new Product();
    	$product = $prdct -> getProductById($productId);
        require_once(ROOT . '/views/product.php');
        return true;
    }
}