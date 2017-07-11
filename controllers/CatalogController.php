<?php
use models\Category;
use models\Product;

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{
    public function actionIndex()
    {
        $category = new Category();
        $product = new Product();
        $categoriesList = $category->getCategoriesList();
        $productsList = $product->getProductsList();
        require_once(ROOT . '/views/catalog.php');
        return true;
    }

        /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId)
    {
    	$category = new Category();
        $product = new Product();
        $categoriesList = $category->getCategoriesList();
        $productsList = $product->getProductsListByCategory($categoryId, $_SESSION['min_price'], $_SESSION['max_price']);

        require_once(ROOT . '/views/category.php');
        return true;
    }
}
