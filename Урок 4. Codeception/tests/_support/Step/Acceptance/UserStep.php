<?php
namespace Step\Acceptance;

class UserStep extends \AcceptanceTester
{   
    public const USER_NMB = 10;

    public function getCreateUser()
    {
        $I = $this;
        
        for($i = 1; $i<= self::USER_NMB; $i++) {

            $faker = $I->getFaker();

            $this->data = [
                'job'               => $faker->company,
                'superhero'         => $faker->boolean(),
                'skill'             => $faker->word,
                'email'             => 'd_lapteva'. $faker->email,
                'name'              => $faker->name,
                'DOB'               => $faker->date("Y-m-d"),
                'avatar'            => $faker->imageUrl(),
                'canBeKilledBySnap' => $faker->boolean(),
                'created_at'        => $faker->date("Y-m-d"),
                'owner'             => "dlapteva",
            ];

            $I->haveHttpHeader('Content-Type', 'application/json');
            $I->haveInCollection('people', $this->data);
        }
    }
}