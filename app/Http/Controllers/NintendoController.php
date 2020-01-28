<?php

namespace App\Http\Controllers;
use App\Game;

use Illuminate\Http\Request;

class NintendoController extends Controller
{
    public function index()
    {
        $nintendoGames = Game::find([25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36]);

        // returns all the games from one category
        return view('products.nintendo', compact('nintendoGames'));
    }
    
    public function show(Game $game)
    {   
        return view('layouts.product', compact('game'));
    }
}
