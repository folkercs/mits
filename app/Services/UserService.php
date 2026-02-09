<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    static public function create(array $data)
        {
            $response = Http::post(env('MS_USER_LOCAL') .'/register',$data);
            return $response->json();
        }
    
        static public function auth(array $data)
        {
            $response = Http::post(env('MS_USER_LOCAL') .'/authenticate',$data);
            return $response->json();
        }        
}
