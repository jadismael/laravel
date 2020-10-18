<?php


namespace App\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class GuzzleService
{
    private $client;
    private $result;

    public function __construct()
    {

        $this->client = new Client(); //GuzzleHttp\Client
    }

    public function post(string $url, array $data)
    {
        try {

            $this->result = $this->client->post($url, [RequestOptions::JSON => $data
            ]);
            return $this->result;
        } catch (GuzzleException $e) {

            echo 'Api exception: ', $e->getMessage(), "\n";

        };
    }

    public function isSuccessful(): bool
    {
        if (!$this->result) {
            return false;
        }
        return $this->result->getStatusCode() == 200;

    }
}