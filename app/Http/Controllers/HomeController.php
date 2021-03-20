<?php

namespace App\Http\Controllers;

use App\Models\Player;

class HomeController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('index', compact('players'));
    }
}
