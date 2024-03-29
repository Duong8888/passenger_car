<?php

namespace App\Console\Commands;

use App\Models\PassengerCarWorkingTime;
use App\Models\WorkingTime;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdateStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        $currentTime = Carbon::now();
        $workingTimes = WorkingTime::where('departure_time', '>', $currentTime)
            ->where('arrival_time', '>', $currentTime)
            ->get();

        foreach ($workingTimes as $workingTime) {
            // Lấy danh sách xe (passenger cars) dựa trên thời gian khởi hành (departure_time) và thời gian đến (arrival_time)
            $passengerCars = $workingTime->passengerCars;
            $departureTime = Carbon::parse($workingTime->departure_time);
            $arrivalTime = Carbon::parse($workingTime->arrival_time);
            foreach ($passengerCars as $passengerCar) {
                if ($departureTime->gt($currentTime)) {
                    $passengerCar->pivot->status = 0;
                } elseif ($arrivalTime->gt($currentTime)) {
                    $passengerCar->pivot->status = 1;
                } else {
                    $passengerCar->pivot->status = 2;
                }
                $passengerCar->pivot->save();
            }
        }
        $this->info('Status updated successfully!');
    }
}
