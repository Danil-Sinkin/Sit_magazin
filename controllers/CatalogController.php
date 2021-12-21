<?php


class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        // Список последних товаров
        $latestProducts = Product::getLatestProducts(12);

        // Подключаем вид
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }
    
    /*
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {


        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();
        
        // Список товаров в категории
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);
       
        // Подключаем вид
        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

}
