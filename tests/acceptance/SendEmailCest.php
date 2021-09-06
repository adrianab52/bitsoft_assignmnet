<?php
use Page\Acceptance\TestEmailPage;
use Step\Acceptance\LoginStep;
use Step\Acceptance\TestEmailStep;

class SendEmailCest
{
    public function _before(LoginStep $loginStep)
    {
        $loginStep->login($this);

    }

    // tests
    public function tryToTest(TestEmailStep $testEmailStep)
    {
        $testEmailStep->testEmail();
    }
}
