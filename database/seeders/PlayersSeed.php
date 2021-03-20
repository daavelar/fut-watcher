<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'name' => 'Pogba 88',
            'url' => 'https://www.futbin.com/21/playerPrices?player=134413592',
            'purchase_price' => 450000
        ]);

        Player::create([
            'name' => 'Rashford Inform 86',
            'url' => 'https://www.futbin.com/21/playerPrices?player=67340541',
            'purchase_price' => 690000
        ]);

        Player::create([
            'name' => 'Kante Inform 89',
            'url' => "https://www.futbin.com/21/playerPrices?player=67324778",
            'purchase_price' => 211000
        ]);

        Player::create([
            'name' => 'Zaha Headliner',
            'url' => 'https://www.futbin.com/21/playerPrices?player=117639229',
            'purchase_price' => 400000
        ]);

        Player::create([
            'name' => 'Mané Gold',
            'purchase_price' => 140000,
            'url' => 'https://www.futbin.com/21/playerPrices?player=208722',
        ]);

        Player::create([
            'name' => 'Salah Ouro',
            'purchase_price' => 140000,
            'url' => 'https://www.futbin.com/21/playerPrices?player=209331',
        ]);

    }
}
