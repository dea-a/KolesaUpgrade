<?php
namespace Page\Acceptance;

class FormPage
{
    // URL главной страницы
    public static $URL = '';

    //селектор поля First name
    public static $firstNameField= '#firstName';

    //селектор поля Last name
    public static $lastNameField = '#lastName';

    //селектор поля E-mail
    public static $emailField = '#input_38';

    //селектор поля Phone number
    public static $phoneNumberField = '#phoneNumber';

    //селектор поля Adress
    public static $adressField = '#address';

    //селектор поля City
    public static $cityField = '#city';

    //селектор поля State
    public static $stateField = '#state';

    //селектор поля Postal / Zip Code
    public static $zipCodeField = '#postal';

    //селектор Выбор метода оплаты 
    public static $paymentMetod = '#payment-wrapper-songbird > table:nth-child(2)'; 

    //селектор для радиобаттона метод оплаты кредитной картой
    public static $paymentMetodCreditCard = '#input_32_paymentType_credit'; 

    //селектор поля First Name для Credit Card
    public static $firstNameCreditCardfield = '#input_32_cc_firstName';

    //селектор поля Last Name для  Credit Card
    public static $LastNameCreditCardfield = '#input_32_cc_lastName';

    //селектор поля  Credit Card Number
    public static $creditCardNumberfield = '#input_32_cc_number';

    //селектор поля Security Code
    public static $securityCodefield = '#input_32_cc_ccv';

    //селектор поля Expiration Month
    public static $expirationMonthField = '#input_32_cc_exp_month';

    //селектор поля Expiration Year
    public static $expirationYearField = '#input_32_cc_exp_year';

    //селектор поля Street Address для Credit Card
    public static $adressCreditCardField = '#input_32_addr_line1';

    //селектор поля City для Credit Card
    public static $cityCreditCardField = '#input_32_city';

    //селектор поля State для Credit Card
    public static $stateCreditCardField = '#input_32_state';

    //селектор поля Postal / Zip Code для Credit Card
    public static $zipCodeCreditCardField = '#input_32_postal';

    //селектор поля Country для Credit Card
    public static $countryCreditCardField = '#input_32_country';

    //селектор для выбора значения поля Expiration Month
    public static $expirationMonthMarch = '#input_32_cc_exp_month > option:nth-child(4)';

    //селектор для выбора значения поля Expiration Year
    public static $expirationYear2027 = '#input_32_cc_exp_year > option:nth-child(5)';

    //селектор для выбора значения поля Country для Credit Card
    public static $countryCreditCardKazakhstan = '#input_32_country > option:nth-child(102)';

    //селектор кнопки отправки внесенных данных в форму
    public static $register= '#input_36';

    //селектор текста 'goood job' на странице,  после отправки данных в форме
    public static $message= 'body > h1';
}
