<?php
namespace Page\Acceptance;

class AccountPage
{
     /**
     *  URL страницы аккаунта
     */ 
    public static $URL = 'index.php?controller=my-account';

     /**
     * кнопка возврата на главную страницу после входа в личный кабинет
     */
    public static $backToMainPageButton = '//*[@id="center_column"]/ul/li/a';

     /**
     * кнопка Перехода на страницу с избранными товарами пользователя
     */
    public static $myWishlistButton = '//li[@class="lnk_wishlist"]/a';
}
