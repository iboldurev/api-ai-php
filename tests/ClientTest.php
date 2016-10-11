<?php

use ApiAi\Client;

class ClientTest extends PHPUnit_Framework_TestCase
{
    public function testHello()
    {
        $client = new Client('09604c7f91ce4cd8a4ede55eb5340b9d');

        $query = $client->get('query', [
            'query' => 'Hello',
        ]);

        $this->assertTrue($query->getReasonPhrase() === 'OK');
        $this->assertTrue($query->getStatusCode() === 200);

        $response = json_decode((string) $query->getBody(), true);

        $this->assertEquals($response['result']['action'], 'greeting');
        $this->assertEquals($response['result']['fulfillment']['speech'], 'Hi! How are you?');
    }
}
