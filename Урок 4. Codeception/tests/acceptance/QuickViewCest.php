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
        $I->moveMouseOver('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.product_img_link > img');
        $I->seeElement('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li.ajax_block_product.col-xs-12.col-sm-4.col-md-3.last-item-of-mobile-line.hovered > div > div.left-block > div > a.quick-view');
        $I->seeElement('#product > div');
        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');

        codecept_debug($I->grabTextFrom('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));
    }
}
