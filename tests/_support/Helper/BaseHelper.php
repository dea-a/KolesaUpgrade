<?php
namespace Helper;

use Locale;

class BaseHelper extends \Codeception\Module
{   
    public function getFaker($locale = 'ru_Ru' ) 
    {
        $faker = \Faker\Factory::create($locale);
        $faker -> addProvider(new CustomFakerProvider($faker));

        return $faker;
    }
}