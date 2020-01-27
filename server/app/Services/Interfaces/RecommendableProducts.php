<?php

namespace App\Services\Interfaces;

interface RecommendableProducts
{
    public function getRecommendedProductsBy(string $currentWeatherCondition);
}
