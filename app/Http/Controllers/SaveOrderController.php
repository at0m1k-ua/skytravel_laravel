<?php

namespace App\Http\Controllers;

use App\Storage;
use Illuminate\Http\Request;

class SaveOrderController extends Controller
{
    public function handle(Request $request)
    {
        $travel = (new Storage())->getTravels()[$request->travel_id];
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;

        if ($travel && $name && $phone && $email) {
            fputcsv(
                fopen('/home/user/orders.csv', 'a'),
                [$name, $phone, $email, $travel->id]
            );
        }

        return redirect('/');
    }
}
