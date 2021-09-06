<?php
namespace Step\Api;
use ApiTester;

class ApiGeneralStep extends \ApiTester
{
    public function addContentTypeHeader(ApiTester $I){
        $I->haveHttpHeader('Content-Type','application/json');

    }

    public function amHttpAuthenticated(ApiTester $I){
        $I->haveHttpHeader('api_key', 'special-key');
    }
}