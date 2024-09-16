<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Car;
use Carbon\Carbon;

class CheckAuctionEnd extends Command
{
    protected $signature = 'auction:check-end';

    protected $description = 'Check if any car auction time has ended';

    public function handle()
    {

        $cars = Car::where('event_time', '<=', Carbon::now())
            ->where('status', '!=', 0)
            ->get();

        foreach ($cars as $car) {

            $car->status = 0;
            $car->save();

        }

        $this->info('Auction check completed.');
    }
}
