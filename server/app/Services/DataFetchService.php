<?php

namespace App\Services;

use App\Services\Interfaces\FetchableMeteoData;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class DataFetchService implements FetchableMeteoData
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getMeteoResponse(string $city): string
    {
        try {
            $response = $this->client->get("https://api.meteo.lt/v1/places/$city/forecasts/long-term")->getBody();
        } catch (Exception $e) {
            throw new \Exception($e->getCode());
        }
        return $response;
    }
}
