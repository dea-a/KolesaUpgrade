<?php

class SearchCest
{
    // Поиск товара с помощью поисковой строки и подсчет количества найденных товаров
    public function SearchAndCountTheProducts(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_block_top');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeElement('#columns');
        $I->seeElement('#center_column > ul');
        $I->seeNumberOfElements('#center_column > ul', 5);
    }
}