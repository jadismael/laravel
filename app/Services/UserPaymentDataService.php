<?php


namespace App\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class UserPaymentDataService
{


    public function post(string $url, array $data)
    {
        try {
            $client = new Client(); //GuzzleHttp\Client
            $result = $client->post($url, [RequestOptions::JSON => $data
            ]);
            return $result;
        } catch (GuzzleException $e) {

            echo 'Api exception: ', $e->getMessage(), "\n";

        };
    }
}