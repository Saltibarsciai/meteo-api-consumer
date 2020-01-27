<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Services\ResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class WeatherController extends Controller
{
    /**
     * @param CityRequest $request
     * @param $city
     * @param ResponseService $responseService
     * @return Response
     * @throws Exception
     */
    public function index(CityRequest $request, $city, ResponseService $responseService)
    {
        return response($responseService->productsFor($city));
    }
}
