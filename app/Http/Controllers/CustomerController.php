<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Ticket;

class CustomerController extends Controller
{
    public function index()
    {
        $now_serving = Ticket::where('status', "serving")->latest()->first();
        $last_number = Ticket::where('status', "new")->latest()->first();
        $c1 = Ticket::where('served_by', "1")->where('status', "serving")->latest()->first();
        $c2 = Ticket::where('served_by', "2")->where('status', "serving")->latest()->first();
        $c3 = Ticket::where('served_by', "3")->where('status', "serving")->latest()->first();
        $c4 = Ticket::where('served_by', "4")->where('status', "serving")->latest()->first();

        $ticket = [
            'now_serving'  => $now_serving,
            'last_number'   => $last_number,
            'c1'   => $c1,
            'c2'   => $c2,
            'c3'   => $c3,
            'c4'   => $c4,
        ];

        return view('customer')->with('ticket', $ticket);
    }

    public function takeNumber(){
        $ticket = new Ticket;
        $ticket->save();

        return $ticket;
    }
}
