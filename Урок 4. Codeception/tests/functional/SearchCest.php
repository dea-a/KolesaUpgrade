<?php

class SearchCest
{
    // Поиск товара с помощью поисковой строки и подсчет количества найденных товаров
    public function SearchAndCountTheProducts(FunctionalTester $I)
    {
        //Переменные для локаторов CSS и XPath

        $searchBlockTopCss = '.col-sm-4#search_block_top';
        $searchBlockTopXPath = '//div[@id="search_block_top"]';
        $searchQueryTopCss = '.search_query';
        $searchQueryTopXPath = '//input[@id="search_query_top"]';
        $searchButtonCss = '#searchbox > .button-search';
        $searchButtonXPath = '//button[contains (@class, "button-search")]'; // '//form[@id="searchbox"]/button'
        $columnsWithProductCss = '.columns-container';
        $columnsWithProductXPath = '//div[@id="columns"]';
        $productListCss = '.product_list';
        $productListXPath = '//div[@id="center_column"]/ul';
        $productContainerCss = '.product-container';
        $productContainerXPath = '//div[@class="product-container"]';

        //шаги для выполнения

        $I->amOnPage('');
        $I->seeElement('#search_block_top');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeElement('#columns');
        $I->seeElement('#center_column > ul');
        $I->seeNumberOfElements('.product-container', 5);
    }
}