<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class DBService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    static public function dbreset()
    {
        $response = Http::get(env('MS_DATABASE_LOCAl') . '/reset-db');
        return $response->json();
    }
}
