<?php

namespace App\Http\Controllers;

use App\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    public function index($id)
    {
        $ticketCategories = TicketCategory::where('movie_id', $id)->get();
        $response = [
            'success' => true,
            'ticketCategories' => $ticketCategories,
            'message' => "",
        ];

        return response()->json($response, 200);
    }
}
