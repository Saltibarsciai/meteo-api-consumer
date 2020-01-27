<?php

namespace App\Services\Interfaces;

interface FindableCondition
{
    public function getWeatherConditionFrom(string $rawMeteoData): string;
}
