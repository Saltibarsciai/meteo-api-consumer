<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class WeatherController extends Controller
{
    /**
     * @param string $city
     * @return Response
     */
    public function index($city)
    {
        return response();
    }
}
