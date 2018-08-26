<?php
use DialogFlow\Client;

class QueryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        // wish there was a better way to load .env's in tests...
        $dotenv = new Dotenv\Dotenv(__DIR__ . '/../../');
        $dotenv->load();
        $this->client = new Client($_ENV['DIALOGFLOW_CLIENT_ACCESS_TOKEN']);
    }

    protected function _after()
    {
    }

    // tests
    public function testQueryDoesNotRaiseException()
    {
        $query = $this->client->get('query', [
            'query' => 'Hello',
            'sessionId' => '1',
        ]);

        $response = json_decode((string) $query->getBody(), true);
    }
}
