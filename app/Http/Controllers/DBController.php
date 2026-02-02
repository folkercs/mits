<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DBService;

class DBController extends Controller
{
        public function resetdb()
    {
        $alma = DBService::dbreset();
        return response()->json("message: Database reset",200);
    }
}
