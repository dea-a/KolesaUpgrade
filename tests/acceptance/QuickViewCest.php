<?php

class QuickViewCest
{

    /**
     *  Открытие страницы и быстрый просмотр товара с момощью кнопки "quick view"
     * 
     * */ 
    public function ProductQuickView(AcceptanceTester $I)
    {
        //Переменные для локаторов CSS и XPath

        $tabContentCss = '.tab-content';
        $tabContentXPath = '//div[@class="tab-content"]';
        $homefeaturedCss = '#homefeatured.product_list ';
        $homefeaturedXPath = '//ul[@id ="homefeatured"]';
        $productNameCss = '#homefeatured > li:nth-child(2) h5 > a';
        $productNameXPath = '//ul[@id="homefeatured"]/li[2]//h5/a';
        $quickViewButtonCss = '#homefeatured > li:nth-child(2) a.quick-view';
        $quickViewButtonXPath = '//ul[@id="homefeatured"]/li[2]//div[1]/div/a[2]';
        $iframeNameCss = '.fancybox-iframe';
        $iframeNameXPath = '//iframe[@class="fancybox-iframe"]';
        $productCss = '#product';
        $productXPath = '//*[@id="product"]';
        $productCenterColumCss = '#product div.pb-center-column.col-xs-12.col-sm-4';
        $productCenterColumXPath = '//*[@id="product"]//div/div[2]';
        $productNameForQuickViewCss = '#product div.pb-center-column.col-xs-12.col-sm-4 > h1';
        $productNameForQuickViewXPath = '//*[@id="product"]//div/div[2]/h1';

        //шаги для выполнения

        $I->amOnPage('');
        $I->seeElement('#center_column > div.tab-content');
        $I->seeElement('#homefeatured');
        $I->see('Blouse', '#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link');
        $I->seeElement('//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]');
        $I->click('//*[@id="homefeatured"]/li[2]/div/div[1]/div/a[2]');
        $I->switchToIFrame('.fancybox-iframe');
        $I->seeElement('#product');
        $I->seeElement('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4');

        codecept_debug($I->grabTextFrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1'));

        $I->see('Blouse', '#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
