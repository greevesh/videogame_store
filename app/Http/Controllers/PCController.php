<?php

namespace App\Http\Controllers;
use App\Game;

use Illuminate\Http\Request;

class PCController extends Controller
{
    public function index()
    {
        $pcGames = Game::find([37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]);

        // returns all the games from one category
        return view('products.pc', compact('pcGames'));
    }

    public function show(Game $game)
    {   
        return view('layouts.product', compact('game'));
    }
}
