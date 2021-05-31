<?php
namespace Page\Acceptance;

class MainProductPage
{
    // URL главной страницы
    public static $URL = '';

    //селектор Элементов верхнего меню страницы
    public static $TopMenuElements = '#block_top_menu > ul';

    //селектор второго элемента верхнего меню страницы
    public static $secondTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > a';

    //селектор меню категорий одного из элементов верхнего меню 
    public static $categoryOfTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > ul';

    //селектор третьей категории второго элемента верхнего меню страницы
    public static $ThierdcategoryOfSecondTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > ul > li:nth-child(3) > a';

}
