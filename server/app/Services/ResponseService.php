<?php

namespace App\Services;

use App\Services\Interfaces\RecommendableProductsFormat;

class ResponseService implements RecommendableProductsFormat
{
    public function productsFor(string $city): array
    {
        $dataFetch = new DataFetchService();
        $weatherConditionService = new WeatherConditionService();
        $recommendedProductsService = new RecommendedProductsService();
        try {
            $response = $dataFetch->getMeteoResponse($city);
        } catch (\Exception $e) {
            throw new \Exception($e->getCode());
        }
        $weatherCondition = $weatherConditionService->getWeatherConditionFrom($response);
        $recommendedProducts =  $recommendedProductsService->getRecommendedProductsBy($weatherCondition);
        return
            [
                'city' => $city,
                'current_weather' => $weatherCondition,
                'recommended_products' => $recommendedProducts
            ];
    }
}
