<?php

/**
 * Класс для работы с юзером
 */
class UserCest
{   
    /**
     * Тест на проверку создания юзера
     * @group userCreate
     */
    public function checkUserCreate(FunctionalTester $I)
    {   $defaultshema = [
        'job'       => 'string',
        'superhero' => 'boolean',
        '_id'       => 'string',
        'email'     => 'string',
        'name'      => 'string', 
        'owner'     => 'string'
    ];

    $userData = [
        'email' => $I->getFaker()->email,
        'owner' => "d_lapteva".$I->getFaker()->userName,
        'job'   => $I->getFaker()->company,
        'name'  => $I->getFaker()->name
    ];

        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);
        $I->seeResponseMatchesJsonType($defaultshema);
    }

    /**
     * Тест на проверку изменения данных юзера
     * @group userUpdate
     */
    public function checkUserUpdate(FunctionalTester $I)
    {   $userData = [
        'email' => $I->getFaker()->email,
        'owner' => "d_lapteva".$I->getFaker()->userName,
        'job'   => $I->getFaker()->company,
        'name'  => $I->getFaker()->name
    ];
        $userName = $I->getFaker()->name;

        //создание юзера
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);

        //получение id юзера
        $user_id = $I->grabDataFromResponseByJsonPath('._id');
        var_dump($user_id);

        $uri = 'human?_id='.$user_id[0];

        //обновление данных юзера и проверка
        $I->sendPut($uri, ['name'  => $userName]);
        $I->seeResponseContainsJson(['nModified' =>  1]);
        $I->sendGet('people', $userData);
        $I->seeResponseContainsJson(['name' => $userName]);
    }

    /**
     * Тест на проверку удаления юзера
     * @group userDelete
     */
    public function checkUserDelete(FunctionalTester $I)
    {   $userData = [
        'email' => $I->getFaker()->email,
        'owner' => "d_lapteva".$I->getFaker()->userName,
        'job'   => $I->getFaker()->company,
        'name'  => $I->getFaker()->name
    ];
        //создание юзера
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);

        //получение id юзера
        $user_id = $I->grabDataFromResponseByJsonPath('._id');
        var_dump($user_id);

        $uri = 'human?_id='.$user_id[0];

        //удаление юзера и проверка
        $I->sendDelete($uri);
        $I->seeResponseContainsJson(['deletedCount' =>  1]);
        $I->sendGet('people', $userData);
        $I->seeResponseContainsJson([]);
    }
}