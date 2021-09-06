<?php
namespace Step\Acceptance;
use Page\Acceptance\TestEmailPage;

class LoginStep extends \AcceptanceTester
{
    public function login()
    {

        $I = $this;

        $I->amOnPage(\Page\Acceptance\TestEmailPage::$URL);
        $I->see('Accesați Gmail');
        $I->wait(5);
        $I->fillField(TestEmailPage::$email, 'testadriana5@gmail.com');
        $I->wait(5);
        $I->click(TestEmailPage::$nextButton);
        $I->wait(5);
        $I->fillField(TestEmailPage::$password, 'parolatest');
        $I->click(TestEmailPage::$nextButton2);
        $I->wait(5);
        try {
            $I->waitForElementVisible(TestEmailPage::$composeButton);
        } catch (\Exception $e){

        }
        $I->wait(5);

    }
}