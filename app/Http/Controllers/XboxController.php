<?php

namespace App\Http\Controllers;
use App\Game;

use Illuminate\Http\Request;

class XboxController extends Controller
{
    public function index()
    {
        $xboxGames = Game::find([13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]);

        // returns all the games from one category
        return view('products.xbox', compact('xboxGames'));
    }

    public function show(Game $game)
    {   
        return view('layouts.product', compact('game'));
    }
}
