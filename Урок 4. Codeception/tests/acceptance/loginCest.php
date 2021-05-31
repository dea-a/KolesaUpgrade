<?php

use Page\Acceptance\LoginPage;

class loginPageCest

{

    //Закрытие бока с ошибкой, при авторизации через неправильный логин 
    public function closeAuthErrorBlock(AcceptanceTester $I)
    {   $loginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $I->seeElement(LoginPage::$authForm);
        $I->seeElement(LoginPage::$loginInput);
        $I->fillField(LoginPage::$loginInput, LoginPage::WRONGUSERNAME);
        $I->seeElement(LoginPage::$passwordInput);
        $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        $I->seeElement(LoginPage::$loginButton);
        $I->click(LoginPage::$loginButton);
        $I->seeElement(LoginPage::$errorMessageBlock);
        $I->seeElement(LoginPage::$errorMessageCloseButton);
        $loginPage->clikCloseButtonOnErrorMessage();
        $I->dontSeeElement(LoginPage::$errorMessageBlock);
    
        codecept_debug($I->makeScreenshot('errorMessagehasbeenclosed'));

    }
}
