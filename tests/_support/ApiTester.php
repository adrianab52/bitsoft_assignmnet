<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

    /**
     * Define custom actions here
     */
    public function haveHttpHeader(string $string, string $string1)
    {
    }

    public function amHttpAuthenticated(string $string, string $string1)
    {
    }

    public function seeResponseCodeIs(int $OK)
    {
    }

    public function sendPost(string $string, array $array)
    {
    }

    public function seeResponseIsJson()
    {
    }
}
