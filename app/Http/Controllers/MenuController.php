<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;

class MenuController extends Controller
{
       public function listmenu($id)
    {
        $alma = MenuService::getbyid($id);
        return response()->json($alma,200);
    }
}
