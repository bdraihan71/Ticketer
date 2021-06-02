<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'userId' => 'required',
        ]);

        $cart = Cart::create([
            'user_id' => $request->userId,
            'seat_id' => $request->id,
        ]);

        $carts = Cart::with('seat.ticketClass')->where('user_id', $request->userId)->get();
        $response = [
            'success' => true,
            'cart' => $cart,
            'carts'=> $carts,
            'message' => "",
        ];

        return response()->json($response, 200);
    }
}
