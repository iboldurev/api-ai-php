<?php

use ApiAi\Client;
use ApiAi\Method\QueryApi;
use ApiAi\Model\Query;

class QueryApiTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $client = new Client('09604c7f91ce4cd8a4ede55eb5340b9d');
        $queryApi = new QueryApi($client);

        $meaning = $queryApi->extractMeaning('Hello', [
            'sessionId' => '1234567890',
            'lang'      => 'en',
        ]);

        $response = new Query($meaning);

        $this->assertEquals($response->getStatus()->getCode(), 200);
        $this->assertEquals($response->getStatus()->getErrorType(), 'success');
        $this->assertEquals($response->getSessionId(), '1234567890');
        $this->assertEquals($response->getResult()->getAction(), 'greeting');
        $this->assertEquals($response->getResult()->getFulfillment()->getSpeech(), 'Hi! How are you?');
    }
}
