<?php

use Helper\CustomFakerProvider;
use Page\Acceptance\FormPage;

/**
 * Класс для заполнения полей в формах
 */
class fillFieldDocumentCest
{
    /**
     * Тест для заполнения полей в форме Kolesa Upgrade
     * @group testFillField1
     */
    public function ProductQuickView(AcceptanceTester $I)
    {
        $faker = \Faker\Factory::create('ru_RU');
        $faker -> addProvider(new CustomFakerProvider($faker));

        $firstName = $faker -> firstName;
        $lastName = $faker -> lastName;
        $email = $faker -> email;
        $phoneNumber = $faker -> getPhonekz();
        $adress = $faker -> address;
        $city = $faker -> city;
        $state = $faker -> region;
        $zipCode = $faker -> postcode;
        $securityCode = $faker -> getSecurityCodeForCreditCard();
        $creditCardNumber = $faker -> getNumberCreditCard();

        $I->amOnPage('');
        $I->seeElement(FormPage::$firstNameField);
        $I->fillField(FormPage::$firstNameField, $firstName);
        $I->seeElement(FormPage::$lastNameField);
        $I->fillField(FormPage::$lastNameField, $lastName);
        $I->seeElement(FormPage::$emailField);
        $I->fillField(FormPage::$emailField, $email);
        $I->seeElement(FormPage::$phoneNumberField);
        $I->fillField(FormPage::$phoneNumberField, $phoneNumber);
        $I->seeElement(FormPage::$adressField);
        $I->fillField(FormPage::$adressField, $adress);
        $I->seeElement(FormPage::$cityField);
        $I->fillField(FormPage::$cityField, $city);
        $I->seeElement(FormPage::$stateField);
        $I->fillField(FormPage::$stateField, $state);
        $I->seeElement(FormPage::$zipCodeField);
        $I->fillField(FormPage::$zipCodeField, $zipCode);

        $I->seeElement(FormPage::$paymentMetod);
        $I->checkOption(FormPage::$paymentMetodCreditCard);

        $I->seeElement(FormPage::$firstNameCreditCardfield);
        $I->fillField(FormPage::$firstNameCreditCardfield, $firstName);
        $I->seeElement(FormPage::$LastNameCreditCardfield);
        $I->fillField(FormPage::$LastNameCreditCardfield, $lastName);
        $I->seeElement(FormPage::$creditCardNumberfield);
        $I->fillField(FormPage::$creditCardNumberfield, $creditCardNumber);
        $I->seeElement(FormPage::$securityCodefield);
        $I->fillField(FormPage::$securityCodefield, $securityCode);
        $I->click(FormPage::$expirationMonthField);
        $I->seeElement(FormPage::$expirationMonthMarch);
        $I->click(FormPage::$expirationMonthMarch);
        $I->click(FormPage::$expirationYearField);
        $I->seeElement(FormPage::$expirationYear2027);
        $I->click(FormPage::$expirationYear2027);
        $I->seeElement(FormPage::$adressCreditCardField);
        $I->fillField(FormPage::$adressCreditCardField, $adress);
        $I->seeElement(FormPage::$cityCreditCardField);
        $I->fillField(FormPage::$cityCreditCardField, $city);
        $I->seeElement(FormPage::$stateCreditCardField);
        $I->fillField(FormPage::$stateCreditCardField, $state);
        $I->seeElement(FormPage::$zipCodeCreditCardField);
        $I->fillField(FormPage::$zipCodeCreditCardField, $zipCode);
        $I->seeElement(FormPage::$countryCreditCardField);
        $I->click(FormPage::$countryCreditCardField);
        $I->seeElement(FormPage::$countryCreditCardKazakhstan);
        $I->click(FormPage::$countryCreditCardKazakhstan);

        $I->seeElement(FormPage::$register);
        $I->click(FormPage::$register);

        $I->waitForText('Good job', 15, FormPage::$message);

    }
}
