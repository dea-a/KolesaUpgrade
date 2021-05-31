<?php
namespace Page\Acceptance;

class SearchProductPage
{
    // URL страницы поиска продукта по категориям
    public static $URL = '/index.php?id_category=11&controller=category';

    //селектор колонок страницы поиска продукта по категорям
    public static $columns = '#columns';

    //селектор меню видов раскладок результатов поиска
    public static $ViewMenu = '#center_column > div.content_sortPagiBar.clearfix  ul';

    //селектор раскладки результатов поиска: grid, если она выбрана
    public static $checkGridView= '#grid.selected';

    //селектор раскладки результатов поиска: list, если она не выбрана
    public static $listView= '#list > a > i';

    //селектор списка продуктов в режиме таблицы
    public static $productListGrad= '.product_list.row.grid';

    //селектор списка продуктов в режиме списка
    public static $productListList= '.product_list.row.list';
}
