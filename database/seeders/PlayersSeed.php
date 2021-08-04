<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersSeed extends Seeder
{
    public function run()
    {
        $players = [];

        array_map(function ($player) {
            Player::create([
                'name' => $player['name'],
                'url' => $player['url'],
                'purchase_price' => $player['purchasePrice']
            ]);
        }, $players);


    }
}
