<?php

namespace App\Services;

use App\Services\Interfaces\FindableCondition;

class WeatherConditionService implements FindableCondition
{
    public function getWeatherConditionFrom(string $rawMeteoData): string
    {
        return json_decode($rawMeteoData)->forecastTimestamps[0]->conditionCode;
    }
}
