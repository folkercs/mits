<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ReservationService
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
        $response = Http::get(env('MS_RESERVATION_LOCAL') . '/reservation-details?restaurant_id=' . $id);
        return $response->json();
    }

        static public function create(array $data)
        {
            $response = Http::post(env('MS_RESERVATION_LOCAL') .'/reservation-details',$data);

            return $response->json();


        }
}
