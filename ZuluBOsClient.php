<?php

require_once 'vendor/autoload.php';
    
use GuzzleHttp\Client;

class ZuluBOsClient
{
    const BASE_URL = 'http://tradingserverbinary.zulutrade.com/';
    private $login, $password, $client;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->client = new GuzzleHttp\Client();
    }
    
    public function requestAssets()
    {
        $url = self::BASE_URL . 'requestAssets/';

        $response = $this->client->request('GET', $url, [
            'auth' => [$this->login, $this->password]
        ]);

        return $response->getBody();
    }
    
    public function requestBalance()
    {
        $url = self::BASE_URL . 'requestBalance/';

        $response = $this->client->request('GET', $url, [
            'auth' => [$this->login, $this->password]
        ]);

        return $response->getBody();
    }
}