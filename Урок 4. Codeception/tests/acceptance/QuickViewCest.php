<?php

class QuickViewCest
{

    // Открытие страницы и быстрый просмотр товара с момощью кнопки "quick view"
    public function ProductQuickView(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#center_column > div.tab-content');
        $I->seeElement('#homefeatured');
        $I->see('Blouse', '#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link');
        $I->seeElement('//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]');
        $I->click('//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]');
        $I->waitForElement('.primary_block row');
        $I->seeElement('.primary_block row');
    
        codecept_debug($I->grabTextFrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));

        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');

    }
}
