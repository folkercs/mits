<?php

namespace App\Http\Controllers;
use App\Services\RestaurantService;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function list($id)
    {
        $alma = RestaurantService::getbyid($id);
        return response()->json($alma,200);
    }

    public function listall()
    {
        $restaurants = RestaurantService::getAll();
        return response()->json($restaurants,200);

    }
}
