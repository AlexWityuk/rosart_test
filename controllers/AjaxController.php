<?php
use models\Category;
use models\Product;


class AjaxController
{
    public function actionIndex()
    {
        $product = new Product();

        $pr_List = $product->getProductsList($_POST['arr'], $_POST['select_val'],
                                             $_SESSION['min_price'], $_SESSION['max_price']);
        $productsList = $this->inThisDirectoryElementsList($pr_List);
        echo $productsList;
    }

    private function inThisDirectoryElementsList($productsList)
    {
         require_once(ROOT . '/views/ajax.php');
    }
}