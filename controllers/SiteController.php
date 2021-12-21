<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController
{

    public function actionIndex()
    {

        $categories= array();
        // Вывод категории списком при помози foreach для левого меню
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

         // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

}
