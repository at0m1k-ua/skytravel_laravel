<?php

namespace App\Http\Controllers;

use App\Storage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function show(Request $request): View
    {
        $travels = (new Storage())->getTravels();
        return view('order', ['travels' => $travels, 'id' => $request->id]);
    }
}
