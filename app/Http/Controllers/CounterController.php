<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Events\OnOffToggled;
use App\Events\QueueUpdated;
use App\Events\CounterUpdated;
use App\Models\Ticket;

class CounterController extends Controller
{
    public function index()
    {
        return view('counter');
    }

    public function toggleCounterOffline() {
        $counter = explode('/', request()->getRequestUri())[3];
        event(new OnOffToggled($counter, 'off'));
    }

    public function toggleCounterOnline() {
        $counter = explode('/', request()->getRequestUri())[3];
        event(new OnOffToggled($counter, 'on'));
    }

    public function compCurr() {
        $counter = explode('/', request()->getRequestUri())[3];
        $ticket = Ticket::where('served_by', $counter)->where('status', 'serving')->first();
        if($ticket) {
            $ticket->update(['status'=>'done']);
            event(new CounterUpdated($counter, $ticket->status));
        }
        return $ticket;
    }

    public function callNext() {
        $counter = explode('/', request()->getRequestUri())[3];
        $ticket = Ticket::where('served_by', null)->first();

        if($ticket) {
            $ticket->update(['served_by'=>$counter, 'status'=>'serving']);
            event(new CounterUpdated($counter, $ticket->status));
            event(new QueueUpdated($counter, $ticket->id));
        }

        return $ticket;
    }
}
