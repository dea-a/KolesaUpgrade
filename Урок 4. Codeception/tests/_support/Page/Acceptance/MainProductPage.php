<?php
namespace Page\Acceptance;

class MainProductPage
{
     /**
     *  URL главной страницы
     */ 
    public static $URL = '';

     /**
     * селектор Элементов верхнего меню страницы
     */
    public static $TopMenuElements = '#block_top_menu > ul';

     /**
     * селектор кнопки перехода в личный кабинет
     */
    public static $getToAccountButton = '//*[@id="header"]/div[2]/div/div/nav/div[1]';

    /**
     * селектор кнопки входа в личный кабинет
     */
    public static $getToLoginButton = '.header_user_info > .login';

    /**
     * селектор кнопки выхода из личного кабинета
     */
    public static $getToLogoutButton = '.header_user_info >.logout';

     /**
     * селектор второго элемента верхнего меню страницы
     */
    public static $secondTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > a';

     /**
     * селектор меню категорий одного из элементов верхнего меню 
     */
    public static $categoryOfTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > ul';

     /**
     * селектор третьей категории второго элемента верхнего меню страницы
     */
    public static $ThierdcategoryOfSecondTopMenuElement = '#block_top_menu > ul > li:nth-child(2) > ul > li:nth-child(3) > a';

     /**
     * селектор листа с продуктами 
     */
    public static $productList = '#homefeatured';

    /**
     * селектор карточки продукта
     */
    public static $productCard = '//*[@id="homefeatured"]/li[%s]/div';

    /**
     * селектор контейнера для картинки продукта 
     */
    public static $productImgContainer = '//*[@id="homefeatured"]/li[%s]/div/div[1]/div';

    /**
     * селектор кнопки Quick view 
     */
    public static $quickViewButton = '//*[@id="homefeatured"]/li[%s]/div/div[1]/div/a[2]';

}
