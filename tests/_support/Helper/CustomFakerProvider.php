<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{   /*
    *коды для казахстанского мобильного номера
    */
    protected $phoneCodes = [
        '701',
        '702',
        '705',
        '778'
    ];
    
    /*
    * Возвращает рандомный казахстанский номер
    */
    public function getPhonekz()
    {
        return sprintf(
            '7 (%d)-%d-%d-%d',
            $this ->phoneCodes[array_rand($this->phoneCodes)],
            random_int(100, 999),
            random_int(10, 99),
            random_int(10, 99),
        );
    }

    /*
    *номера кредитных карт
    */
    protected $numberCreditCard = [
        '4000001234567899',
        '5110000134567579',
        '4242424242424242',
        '6390034390116414',
        '5555555555554444'
    ];

     /*
    * Возвращает рандомный номер кредитной карты
    */
    public function getNumberCreditCard()
    {
        return sprintf(
            '%d',
            $this ->numberCreditCard[array_rand($this->numberCreditCard)]
        );
    }

    /*
    * Возвращает рандомный CVV код кредитной карты
    */
    public function getSecurityCodeForCreditCard()
    {
        return sprintf(
            '%d',
            random_int(100, 999),
        );
    }
}