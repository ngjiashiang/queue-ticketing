<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Queue;

class CustomerController extends Controller
{
    public function index()
    {
        $queue = Queue::where('id', 1)->first();

        if($queue){
            return view('customer')->with('queue', $queue);
        }

        return view('customer');
    }

    public function takeNumber(){
        $queue = new Queue;
        $queue->save();

        return $queue;
    }
}
