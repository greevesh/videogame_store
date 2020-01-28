<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class PlaystationController extends Controller
{
    public function index()
    {   
        $playstationGames = Game::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]);

        // returns all the games from one category
        return view('products.playstation', compact('playstationGames'));
    }   

    public function show(Game $game)
    {   
        return view('layouts.product', compact('game'));
    }
}
