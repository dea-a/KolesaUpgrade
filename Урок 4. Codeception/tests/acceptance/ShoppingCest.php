<?php

use Page\Acceptance\AccountPage;
use Page\Acceptance\AuthShoppingPage;
use Page\Acceptance\MainProductPage;
use Page\Acceptance\WishlistPage;

/**
 * Класс для покупки товаров 
 */
class ShoppingCest
{   public const PRODUCTS_NMB = 2;

     /**
     * Вход в личный кабинет
     */
    protected function login(\AcceptanceTester $I)
    {
        $I->amOnPage(MainProductPage::$URL);
        $I->seeElement(MainProductPage::$getToLoginButton);
        $I->click(MainProductPage::$getToLoginButton);
        $I->seeInCurrentUrl(AuthShoppingPage::$URL);
        $I->seeElement(AuthShoppingPage::$loginForm);
        $I->seeElement(AuthShoppingPage::$emaiField);
        $I->fillField(AuthShoppingPage::$emaiField, AuthShoppingPage::EMAIL);
        $I->seeElement(AuthShoppingPage::$passwordField);
        $I->fillField(AuthShoppingPage::$passwordField, AuthShoppingPage::PASSWORD);
        $I->seeElement(AuthShoppingPage::$loginButton);
        $I->click(AuthShoppingPage::$loginButton);
        $I->seeInCurrentUrl(AccountPage::$URL);
        $I->click(AccountPage::$backToMainPageButton);
    }
    
     /**
     * Выход из личного кабинета
     */
    protected function logout(\AcceptanceTester $I)
    {
        $I->seeElement(MainProductPage::$getToLogoutButton);
        $I->click(MainProductPage::$getToLogoutButton);
        $I->wait(4);
        $I->seeElement(AuthShoppingPage::$loginForm);
    }

     /**
     * Удаление листа с избранными товарами
     */
    protected function deleteWishlist(\AcceptanceTester $I)
    {
        $I->seeElement(WishlistPage::$wishlistDelete);
        $I->click(WishlistPage::$wishlistDelete);
        $I->wait(2);
        $I->acceptPopup();
        $I->wait(2);
    }


    /**
     * Проверка количества товаров в избранном
     * @group testQty
     * @before login
     * @after deleteWishlist
     * @after logout
     */
    public function checkQuantityOfProductInTheWishlist(\Step\Acceptance\ShoppingStep $I)
    {
        $I->amOnPage(MainProductPage::$URL);
        $I->waitForElement(MainProductPage::$productList, 10);
        $I->addProductToWishList();
        
        //проверка количества продуктов
        $I->scrollTo(MainProductPage::$getToAccountButton);
        $I->wait(5);
        $I->seeElement(MainProductPage::$getToAccountButton);
        $I->click(MainProductPage::$getToAccountButton);
        $I->seeInCurrentUrl(AccountPage::$URL);
        $I->seeElement(AccountPage::$myWishlistButton);
        $I->click(AccountPage::$myWishlistButton);
        $I->seeInCurrentUrl(WishlistPage::$URL);
        $I->scrollTo(WishlistPage::$historyBlock);
        $I->waitForElement(WishlistPage::$historyBlock, 10);
        $I->seeElement(WishlistPage::$quantityOfProductInTheWishlist);
        
        $qty = $I->grabTextFrom(WishlistPage::$quantityOfProductInTheWishlist);
        $num = self::PRODUCTS_NMB;
        $I->assertEquals($num, $qty, 'Checking that the quantity of Product in the wishlist is correct');

        codecept_debug($I->grabTextFrom(WishlistPage::$quantityOfProductInTheWishlist));
   
    }
}
