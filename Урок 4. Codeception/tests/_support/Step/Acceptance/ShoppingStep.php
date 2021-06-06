<?php
namespace Step\Acceptance;

use Page\Acceptance\MainProductPage;
use Page\Acceptance\ProductQuickViewPage;

class ShoppingStep extends \AcceptanceTester
{   
    public const PRODUCTS_NMB = 2;

    public function addProductToWishList()
    {
        $I = $this;

        for($i = 1; $i<= self::PRODUCTS_NMB; $i++) {
            $I->seeElement(sprintf(MainProductPage::$productCard, $i));
            $I->moveMouseOver(sprintf(MainProductPage::$productImgContainer, $i));
            $I->wait(5);
            $I->seeElement(sprintf(MainProductPage::$quickViewButton, $i));
            $I->click(sprintf(MainProductPage::$quickViewButton, $i));

            //подключение к iframe
            $I->switchToIFrame(ProductQuickViewPage::$quickViewIframe);
            $I->waitForElement(ProductQuickViewPage::$productBoxInfo, 10);
            $I->seeElement(ProductQuickViewPage::$wishlistButton);
            $I->click(ProductQuickViewPage::$wishlistButton);
            $I->waitForElement(ProductQuickViewPage::$massageBeforeAddedProductToWishList, 10);
            $I->waitForElement(ProductQuickViewPage::$closeMassageButton, 5);
            $I->click(ProductQuickViewPage::$closeMassageButton);
            $I->switchToIFrame();
            $I->waitForElement(ProductQuickViewPage::$closeQuickViewPageButton, 5);
            $I->click(ProductQuickViewPage::$closeQuickViewPageButton);
        }
    }
}