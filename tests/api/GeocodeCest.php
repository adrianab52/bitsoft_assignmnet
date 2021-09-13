<?php

use ApiTester;
use Step\Api\ApiGeneralStep;
use Page\Acceptance\TestEmailPage;

class GeocodeCest
{

    public function geocode(ApiTester $I)
    {
        $I->haveHttpHeader('apiKey', TestEmailPage::$apiKey);
        $I->sendGet('json'
            . '?apiKey=dV6ui3QojaGN6EXVtLFguv8-LxN9RteE4HN2zX97fPQ'
            . '&lang=ro&q=Strada Ștefan Dimitrescu Pictor 7, București'
        );
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains('{
    "items": [
        {
            "title": "Strada Ștefan Dimitrescu Pictor 7, 041362 București, România",
            "id": "here:af:streetsection:pHnuo-4MTTN0NpjfPBiPuB:CggIBCD9vpTHAhABGgE3",
            "resultType": "houseNumber",
            "houseNumberType": "PA",
            "address": {
                "label": "Strada Ștefan Dimitrescu Pictor 7, 041362 București, România",
                "countryCode": "ROU",
                "countryName": "România",
                "county": "București",
                "city": "București",
                "district": "Sectorul 4",
                "street": "Strada Ștefan Dimitrescu Pictor",
                "postalCode": "041362",
                "houseNumber": "7"
            },
            "position": {
                "lat": 44.39939,
                "lng": 26.10046
            },
            "access": [
                {
                    "lat": 44.39928,
                    "lng": 26.1004
                }
            ],
            "mapView": {
                "west": 26.0992,
                "south": 44.39849,
                "east": 26.10172,
                "north": 44.40029
            },
            "scoring": {
                "queryScore": 1.0,
                "fieldScore": {
                    "city": 1.0,
                    "streets": [
                        1.0
                    ],
                    "houseNumber": 1.0
                }
            }
        }
    ]
}');

    }

    public function reverseGeocode (ApiTester $I)
    {
        $I->haveHttpHeader('apiKey', TestEmailPage::$apiKey);
        $I->sendGet('json'
            . '?apiKey=dV6ui3QojaGN6EXVtLFguv8-LxN9RteE4HN2zX97fPQ'
            . '&at=44.39939,26.10046&lang=ro'
        );
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains(
            '{
    "items": [
        {
            "title": "Strada Ștefan Dimitrescu Pictor 7, 041362 București, România",
            "id": "here:af:streetsection:pHnuo-4MTTN0NpjfPBiPuB:CggIBCD9vpTHAhABGgE3",
            "resultType": "houseNumber",
            "houseNumberType": "PA",
            "address": {
                "label": "Strada Ștefan Dimitrescu Pictor 7, 041362 București, România",
                "countryCode": "ROU",
                "countryName": "România",
                "county": "București",
                "city": "București",
                "district": "Sectorul 4",
                "street": "Strada Ștefan Dimitrescu Pictor",
                "postalCode": "041362",
                "houseNumber": "7"
            },
            "position": {
                "lat": 44.39939,
                "lng": 26.10046
            },
            "access": [
                {
                    "lat": 44.39928,
                    "lng": 26.1004
                }
            ],
            "distance": 0,
            "mapView": {
                "west": 26.09993,
                "south": 44.39892,
                "east": 26.10193,
                "north": 44.39941
            }
        }
    ]
}'
        )
    }


}
