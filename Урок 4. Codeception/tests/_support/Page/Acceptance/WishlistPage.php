<?php
namespace Page\Acceptance;

class WishlistPage
{
     /**
     * URL страницы Wish list
     */
    public static $URL = 'index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * селектор блока с историей списка избранных
     */
    public static $historyBlock = '//*[@id="block-history"]';

    /**
     * селектор количества товаров, добавленных в избранное
     */
    public static $quantityOfProductInTheWishlist = '//*[contains(@id, "wishlist")]/td[2]';

    /**
     * селектор кнопки очистки листа с избранными товарами
     */
    public static $wishlistDelete = '//*[contains(@id, "wishlist")]/td[6]/a';

}
