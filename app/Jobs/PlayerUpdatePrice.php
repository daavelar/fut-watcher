<?php

namespace App\Jobs;

use App\Futbin\FutbinService;
use App\Models\Player;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class PlayerUpdatePrice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $player;


    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function handle()
    {
        $futbin = new FutbinService();
        $currentPrice = $futbin->getPlayerCurrentPrice($this->player);

        $this->player->current_price = $currentPrice;
        $this->player->save();
        Log::info('Price of '.$this->player->name.' was updated');
    }
}
