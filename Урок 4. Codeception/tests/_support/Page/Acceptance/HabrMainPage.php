<?php
namespace Page\Acceptance;

class HabrMainPage
{

    // URL главной страницы
    public static $URL = '';

    //селектор главной страницы
    public static $mainPage = 'body > div.layout';

    //селектор главного меню навигации
    public static $mainNavBar = '.main-navbar';

    //селектор линков меню навигации по категориям
    public static $navBarLinksByCatygory = '#navbar-links';

    //селектор линка меню навигации по категории
    public static $NavBarLink = "//li[@class = 'nav-links__item']/a[contains(@href, '%s')]";

    //селектор заголовка страницы
    public static $pageHeader = '.page-header';

}
