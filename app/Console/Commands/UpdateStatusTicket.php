<?php

namespace App\Console\Commands;

use App\Models\Ticket;
use App\Models\WorkingTime;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdateStatusTicket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-status-ticket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentTime = Carbon::now();

        $workingTimes = WorkingTime::where('departure_time', '>', $currentTime->toDateString())
            ->where('arrival_time', '>', $currentTime->toDateString())
            ->get();

        foreach ($workingTimes as $workingTime) {

            $tickets = $workingTime->hasManyTicket;
            $departureTime = Carbon::parse($workingTime->departure_time);
            $arrivalTime = Carbon::parse($workingTime->arrival_time);
            foreach ($tickets as $ticket) {
                if (Carbon::parse($ticket->date)->lessThan(Carbon::today())) {
                    if ($currentTime->between($departureTime, $arrivalTime)) {
                        $ticket->status = 2;
                    } elseif ($currentTime->lt($departureTime)) {
                        $ticket->status = 1;
                    } else {
                        $ticket->status = 2;
                    }
                    $ticket->save();
                }
            }
        }
    }
}
