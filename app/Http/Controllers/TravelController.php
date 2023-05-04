<?php

namespace App\Http\Controllers;

use App\Storage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TravelController extends Controller
{
    public function showAll(): View
    {
        $travels = (new Storage())->getTravels();
        return view('travels', ['travels' => $travels]);
    }

    public function show(Request $request): View
    {
        $travel = (new Storage())->getTravels()[$request->id];
        return view('travel', ['travel' => $travel]);
    }
}
