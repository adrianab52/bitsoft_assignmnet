<?php

class GeocodeCest
{
    public function geocodeAPI(ApiTester $I)
    {
        $I->haveHttpHeader('dV6ui3QojaGN6EXVtLFguv8-LxN9RteE4HN2zX97fPQ', '/geocode_tool.php');
        $I->sendPost('/users', [
            'name' => 'davert',
            'email' => 'davert@codeception.com'
        ]);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"result":"ok"}');
    }
}
