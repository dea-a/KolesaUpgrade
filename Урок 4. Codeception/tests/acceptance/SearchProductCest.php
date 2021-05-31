<?php

use Page\Acceptance\MainProductPage;
use Page\Acceptance\SearchProductPage;

class SearchProductCest

{

    // При изменении вида расскладки результатов поиска grid на list, вид страницы изменяется 
    public function SearchViewFilter(AcceptanceTester $I)
    {
        $I->amOnPage(MainProductPage::$URL);
        $I->seeElement(MainProductPage::$TopMenuElements);
        $I->see('Dresses', MainProductPage::$secondTopMenuElement);
        $I->moveMouseOver(MainProductPage::$secondTopMenuElement);
        $I->seeElement(MainProductPage::$categoryOfTopMenuElement);
        $I->seeElement(MainProductPage::$ThierdcategoryOfSecondTopMenuElement);
        $I->click(MainProductPage::$ThierdcategoryOfSecondTopMenuElement);

        $I->seeCurrentUrlEquals(SearchProductPage::$URL);
        $I->seeElement(SearchProductPage::$columns);
        $I->seeElement(SearchProductPage::$ViewMenu);
        $I->seeElement(SearchProductPage::$checkGridView);
        $I->seeElement(SearchProductPage::$productListGrad);

        codecept_debug($I->makeScreenshot('grid_filter'));

        $I->seeElement(SearchProductPage::$listView);
        $I->click(SearchProductPage::$listView);

        codecept_debug($I->makeScreenshot('list_filter'));

        $I->seeElement(SearchProductPage::$productListList);
    }
}
