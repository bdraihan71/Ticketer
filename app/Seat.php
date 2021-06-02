<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends TicketerModel
{
    public function ticketClass()
    {
        return $this->belongsTo(TicketClass::class);
    }
}
