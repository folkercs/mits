<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RestaurantService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAll()
    {
        $response = Http::get(env('MS_RESTAURANTS_LOCAL').'/restaurants');

        return $response->json();

    }
}
