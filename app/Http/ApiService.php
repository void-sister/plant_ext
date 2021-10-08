<?php

namespace App\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiService
{
    private $_client;
    private $_uri;

    public function __construct($base_uri = null, $timeout = 60)
    {
        $this->_uri = $base_uri;

        $this->_client = new Client([
            'base_uri' => $this->_uri ?: env('API_URL'),
            'timeout' => $timeout,
            'verify' => false
        ]);
    }


    /**
     * @param $path
     * @return array
     * @throws \Exception|GuzzleException
     */
    public function get($path): array
    {
        $request = $this->_client->get($path);

        $response = (string) $request->getBody();
        $response = json_decode($response);

        if($response->IsSuccess) {
            return $response->data;
        } else {
            return $response->message;
        }
    }

    /**
     * @param $path
     * @param $body
     * @return array
     * @throws \Exception|GuzzleException
     */
    public function post($path, $body = null): array
    {
        $request = $this->_client->post($path, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'body' => json_encode($body)
        ]);

        $response = (string) $request->getBody();
        $response = json_decode($response);

        if($response->IsSuccess) {
            return $response->data;
        } else {
            return $response->message;
        }
    }
}
