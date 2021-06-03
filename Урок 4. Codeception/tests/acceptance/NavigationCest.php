<?php

use Codeception\Example;
use Page\Acceptance\HabrMainPage;

/**
 * Класс для тестирования навигации по сайту
 * @group habrTest
 */ 
class NavigationCest
{

    /**
     * Тест на проверку навигации по категориям в верхнем меню
     * @param Example $data 
     * @dataProvider getDataForNavigationByCategory
     */

    public function categoryNavigation(AcceptanceTester $I, Example $data)
    {

        //шаги для выполнения

        $I->amOnPage('');
        $I->seeElement(HabrMainPage::$mainPage);
        $I->seeElement(HabrMainPage::$mainNavBar);
        $I->seeElement(HabrMainPage::$navBarLinksByCatygory);
        $I->seeElement(sprintf(HabrMainPage::$NavBarLink, $data['NavBarLink']));
        $I->click(sprintf(HabrMainPage::$NavBarLink, $data['NavBarLink']));
        $I->seeInCurrentUrl($data['url']);
        $I->see($data['header'], HabrMainPage::$pageHeader); 
        
    }

    protected $category = [
        ['NavBarLink' => 'top', 'url' => 'top', 'header' => 'Все потоки'],
        ['NavBarLink' => 'develop', 'url' => 'develop', 'header' => 'Разработка'],
        ['NavBarLink' => 'admin', 'url' => 'admin', 'header' => 'Администрирование'],
        ['NavBarLink' => 'design', 'url' => 'design', 'header' => 'Дизайн'],
        ['NavBarLink' => 'management', 'url' => 'management', 'header' => 'Менеджмент'],
        ['NavBarLink' => 'marketing', 'url' => 'marketing', 'header' => 'Маркетинг'],
        ['NavBarLink' => 'popsci', 'url' => 'popsci', 'header' => 'Научпоп']
    ];

    protected function getDataForNavigationByCategory()
    {
        return [
            $this ->category[array_rand($this->category)],
            $this ->category[array_rand($this->category)]
        ];
    }
}
