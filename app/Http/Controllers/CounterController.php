<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CounterController extends Controller
{
    public function index()
    {
        return view('counter');
    }
}
