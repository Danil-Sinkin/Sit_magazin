<?php


include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /*
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        $categories= array();
        // Вывод категории списком при помози foreach для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}
