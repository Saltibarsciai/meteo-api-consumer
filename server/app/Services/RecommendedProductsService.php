<?php

namespace App\Services;

use App\Http\Resources\ProductsResource;
use App\Services\Interfaces\RecommendableProducts;
use App\Weather;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RecommendedProductsService implements RecommendableProducts
{
    public function getRecommendedProductsBy(string $currentWeatherCondition)
    {
        $products = $this->getProductsBy($currentWeatherCondition);
        return $this->formatWithProductResource($products);
    }

    private function getProductsBy(string $currentWeatherCondition)
    {
        $collection = Weather::where('condition', $currentWeatherCondition)->first()->products;
        $limittedCollection = $collection->splice(0, 4);
        return $limittedCollection;
    }

    private function formatWithProductResource( $products): AnonymousResourceCollection
    {
        //remove data with no use from collection
        $productsFormatted = ProductsResource::collection($products);
        return $productsFormatted;
    }
}
