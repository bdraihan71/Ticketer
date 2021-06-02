<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::get();
        $response = [
            'success' => true,
            'movies' => $movies,
            'message' => "",
        ];

        return response()->json($response, 200);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $response = [
            'success' => true,
            'movie' => $movie,
            'message' => "",
        ];

        return response()->json($response, 200);
    }
}
