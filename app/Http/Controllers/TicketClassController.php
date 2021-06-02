<?php

namespace App\Http\Controllers;

use App\TicketClass;
use Illuminate\Http\Request;

class TicketClassController extends Controller
{
    public function index($id)
    {
        $ticketClasses = TicketClass::where('ticket_category_id', $id)->get();
        $response = [
            'success' => true,
            'ticketClasses' => $ticketClasses,
            'message' => "",
        ];

        return response()->json($response, 200);
    }

}
