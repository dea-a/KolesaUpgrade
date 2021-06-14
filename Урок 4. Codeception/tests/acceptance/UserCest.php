<?php

use Page\Acceptance\UserPage;

/**
 * Класс для работы с юзером
 */

class UserCest
{
    /**
     * Тест на проверку удаления юзеров кнопкой snap
     * @group deleteBySnap
     */
    public function checkUserDeleteBySnap(\Step\Acceptance\UserStep $I)
    {   
        $I->getCreateUser();

        //количество элементов, которые нельзя удалить кнопкой 'snap'
        $count = $I->grabCollectionCount('people', ['owner' => 'dlapteva', 'canBeKilledBySnap' => false]);

        //Удаление элементов кнопкой 'snap'
        $I->amOnPage(UserPage::$URL);
        $I->waitForElement(UserPage::$snap, 15);
        $I->click(UserPage::$snap);
        
        //проверка, что удаленных элементов нет на странице
        $I->wait(10);
        $countOnPage = $I->grabTextFrom(UserPage::$cntOfUsers);
        $cnt = trim($countOnPage, "Count: ");
        $I->assertEquals($count, $cnt, "Проверить, что количество элементов на странице равно количеству элементов с canBeKilledBySnap равным false");

        //проверка, что в базе удалились записи с canBeKilledBySnap равным true 
        $I->seeNumElementsInCollection('people', 0, ['owner' => 'dlapteva', 'canBeKilledBySnap' => true]);
        $I->seeNumElementsInCollection('people', $count, ['owner' => 'dlapteva', 'canBeKilledBySnap' => false ]);
    }
}
