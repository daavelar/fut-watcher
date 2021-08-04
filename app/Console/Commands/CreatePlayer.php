<?php

namespace App\Console\Commands;

use App\Futbin\FutbinService;
use App\Models\Player;
use Illuminate\Console\Command;

class CreatePlayer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'players:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a player';

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
        $name = $this->ask('Player name');
        $purchase_price = $this->ask('Purchase price');
        $url = $this->ask('Url in futbin');

        $player = Player::create([
            'name'           => $name,
            'purchase_price' => $purchase_price,
            'url'            => $url
        ]);

        $futbinService = new FutbinService();
        $current_price = $futbinService->getPlayerCurrentPrice($player);

        $player->current_price = $current_price;
        $player->save();

        $this->info('Player created!');
    }
}
