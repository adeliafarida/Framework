<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CoffeController extends Controller
{
    public function index ()
    {
        return view ('hidung', [
            'greeting' => Car::getGreeting()
        ]);
    }
}
