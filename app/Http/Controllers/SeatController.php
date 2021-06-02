<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index($id, $show_time_id)
    {
        $seats = Seat::where('ticket_class_id', $id)->where('show_time_id', $show_time_id)->get();
        $response = [
            'success' => true,
            'seats' => $seats,
            'message' => "",
        ];

        return response()->json($response, 200);
    }
}
