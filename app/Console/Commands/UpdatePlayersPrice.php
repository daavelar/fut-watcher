<?php

namespace App\Console\Commands;

use App\Jobs\PlayerUpdatePrice;
use App\Models\Player;
use Illuminate\Console\Command;

class UpdatePlayersPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'players:update-price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update players price';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $players = Player::all();

        foreach ($players as $player) {
            dispatch_now(new PlayerUpdatePrice($player));
        }
    }
}
