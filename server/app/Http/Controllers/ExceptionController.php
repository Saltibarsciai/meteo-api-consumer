<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ExceptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $code
     * @return Response
     */
    public function index($code)
    {
        return response()->json(['error' => $code]);
    }
}
