<?php
namespace Page\Acceptance;

class TestEmailPage
{
    // include url of current page
    public static $URL = '/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser';
    public static $email = '#identifierId';
    public static $nextButton = "//span[contains(text(),'Înainte')]";
    public static $password = '//*[@id="password"]/div[1]/div/div[1]/input';
    public static $nextButton2 = '#passwordNext';
    public static $composeButton = "//div[contains(text(),'Compose')]";
    public static $inbox = "//a[contains(text(),'Inbox')]";
    public static $checkButton = '#\:27';
    public static $sendTo = '#\:9e';
    public static $subject = '#\:8w';
    public static $bodyEmail = '#\:a2';
    public static $sendButton = '#\:8m';
    public static $sentEmails = '#\:47 > div > div.aio.UKr6le';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
