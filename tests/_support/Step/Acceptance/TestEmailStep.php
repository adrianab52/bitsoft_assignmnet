<?php
namespace Step\Acceptance;
use Page\Acceptance\TestEmailPage;

class TestEmailStep extends \AcceptanceTester
{
    public function testEmail()
    {
        $I = $this;

        $I->wantTo('Navigate to Inbox');
        $I->click(TestEmailPage::$inbox);
        $I->wait(5);
        try {
            $I->waitForElementVisible(TestEmailPage::$checkButton);
        } catch (Exception $e) {
        }
        $I->click(TestEmailPage::$composeButton);
        $I->fillField(TestEmailPage::$sendTo, 'adrianabnta@gmail.com');
        $I->fillField(TestEmailPage::$subject, 'BitSoft Test – Adriana Banuta');
        $I->fillField(TestEmailPage::$bodyEmail, 'This is an automated test to send an email by Adriana Banuta');
        $I->wait(5);
        $I->attachFile(TestEmailPage::$bodyEmail,'test.txt');
        $I->wait(10);
        $I->click(TestEmailPage::$sendButton);
        $I->wait(10);
        $I->click(TestEmailPage::$sentEmails);
        $I->wait(10);
        $I->see('adrianabnta');
    }

}