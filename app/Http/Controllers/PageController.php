<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // $risposta = config("data");
        $dati = [
            "movies" => Movie::all()
        ];

        return view('home', $dati);
    }
}