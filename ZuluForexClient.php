<?php

require_once 'vendor/autoload.php';
    
use GuzzleHttp\Client;

class ZuluForexClient
{
    const BASE_URL = 'http://tradingserver.zulutrade.com/';
    private $login, $password, $client;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->client = new GuzzleHttp\Client();
    }

    public function getProviderStatistics()
    {
        $url = self::BASE_URL . 'getProviderStatistics/';

        $response = $this->client->request('GET', $url, [
            'auth' => [$this->login, $this->password]
        ]);

        return $response->getBody();
    }
    
    public function getTradingConfiguration()
    {
        $url = self::BASE_URL . 'getTradingConfiguration/';

        $response = $this->client->request('GET', $url, [
            'auth' => [$this->login, $this->password]
        ]);

        return $response->getBody();
    }
}