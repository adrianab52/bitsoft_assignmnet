<?php
use ApiTester;
use Step\Api\ApiGeneralStep;

class GeocodeCest
{

    public function geocodeAPI(ApiTester $I)
    {
        $I->haveHttpHeader('Authorization', ' dV6ui3QojaGN6EXVtLFguv8-LxN9RteE4HN2zX97fPQ');
        $I->sendGet('json'
            .'?address=Strada+Stefan+Dimitrescu+Pictor+7,+Bucuresti'
            .'&key=dV6ui3QojaGN6EXVtLFguv8-LxN9RteE4HN2zX97fPQ'
        );
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains('{
                    "error_message" : "The provided API key is invalid.",
                    "results" : [],
                    "status" : "REQUEST_DENIED"}');
        
    }


}
