<?php

class SendEmailCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser');
        $I->see('Accesați Gmail');
        $I->wait(5);
        $I->fillField('#identifierId', 'testadriana5@gmail.com');
        $I->wait(5);
        $I->click('#identifierNext');
        $I->wait(5);
        $I->fillField('//*[@id="password"]/div[1]/div/div[1]/input', 'parolatest');
        $I->click('#passwordNext');
        $I->wait(5);
        try {
            $I->waitForElementVisible('#\:3j > div > div');
        } catch (\Exception $e){
        }
        $I->wait(5);

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Navigate to Inbox');
        $I->click("//a[contains(text(),'Inbox')]");
        $I->wait(5);
        try {
            $I->waitForElementVisible('#\:27');
        } catch (Exception $e) {
        }
        $I->click("//div[contains(text(),'Compose')]");
        $I->fillField('#\:9e', 'adrianabnta@gmail.com');
        $I->fillField('#\:8w', 'BitSoft Test – Adriana Banuta');
        $I->fillField('#\:a2', 'This is an automated test to send an email by Adriana Banuta');
        $I->wait(5);
        $I->attachFile('#\:a2','test.txt');
        $I->wait(10);
        $I->click('#\:8m');
        $I->wait(10);
        $I->click('#\:47 > div > div.aio.UKr6le');
        $I->wait(10);
        $I->see('adrianabnta');

    }
}
