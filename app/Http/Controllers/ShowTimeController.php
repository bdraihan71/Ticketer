<?php

namespace App\Http\Controllers;

use App\ShowTime;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    public function index($id, $movie_id, $date)
    {
        $showTimes = ShowTime::where('ticket_class_id', $id)->where('movie_id', $movie_id)->where('date', $date)->get();
        $response = [
            'success' => true,
            'showTimes' => $showTimes,
            'message' => "",
        ];

        return response()->json($response, 200);
    }
}
