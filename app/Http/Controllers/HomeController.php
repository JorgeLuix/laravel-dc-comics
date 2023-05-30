<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('dbseeder.comics');

        return view('home', compact('comics'));
    }
}
