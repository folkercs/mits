<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReservationService;

class ReservationController extends Controller
{
     public function listres($id)
    {
        $alma = ReservationService::getbyid($id);
        return response()->json($alma,200);
    }

    public function storeres(Request $req)
    {
        $valid = $req->validate([
            'name' => 'required|string',
            'restaurant_id' => 'required|integer',
            'email' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
            'people' => 'required|integer',
            'phone' => 'required|string'
        ]);

        $result = ReservationService::create($valid);

        return response()->json($result,201);

    }
}
