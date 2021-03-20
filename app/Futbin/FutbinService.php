<?php

namespace App\Futbin;

use App\Models\Player;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class FutbinService
{
    public function getPlayerCurrentPrice(Player $player)
    {
        $response = Http::get($player->url);

        $prices = json_decode($response->body(), true);

        $futbinId = explode('=', $player->url)[1];

        return str_replace(',', '', $prices[$futbinId]['prices']['ps']['LCPrice']);
    }
}
