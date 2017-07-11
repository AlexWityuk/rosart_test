<?php

return array(
    'ajax' => 'ajax/index', // actionIndex в AjaxController
    // Товар:
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    //// Каталог:
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    //// Категория товаров:
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'siteprice' => 'site/raceprice', //actionRaceprice в SiteController
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);

