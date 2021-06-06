<?php
namespace Page\Acceptance;

class ProductQuickViewPage
{
    
     /**
     *  селектор iframe окна быстрого просмотра продукта
     */ 
    public static $quickViewIframe = '.fancybox-iframe';

     /**
     *  селектор блока информации о продукте 
     */ 
    public static $productBoxInfo = '//*[@id="buy_block"]/div';

     /**
     *  селектор кнопки добавления продукта в избранное
     */ 
    public static $wishlistButton = '//*[@id="wishlist_button"]';

     /**
     *  селектор кнопки закрытия окна быстрого прасмотра продукта
     */ 
    public static $closeQuickViewPageButton = '#index > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';

     /**
     *  селектор сообщения после добавления продукта в избранное
     */ 
    public static $massageBeforeAddedProductToWishList = '//*[@id="product"]/div[2]/div/div/div/div/p';

    /**
     *  селектор кнопки закрытия сообщения после добавления продукта в избранное
     */ 
    public static $closeMassageButton = '#product > div.fancybox-overlay.fancybox-overlay-fixed > div > div > a';






    

}
