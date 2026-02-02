<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class MenuService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

        static public function getbyid($id)
    {
        $response = Http::get(env('MS_MENU_LOCAL') . '/menu-items?restaurant_id=' . $id);
        return $response->json();
    }
}
