<?php

namespace App\Services\Interfaces;

interface RecommendableProductsFormat
{
    public function productsFor(string $city): array;
}
