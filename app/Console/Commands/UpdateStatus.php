<?php

namespace App\Console\Commands;

use App\Models\PassengerCarWorkingTime;
use App\Models\WorkingTime;
use Carbon\Carbon;
use Illuminate\Console\Command;

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

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentTime = Carbon::now();

        // Lấy danh sách các bản ghi cần cập nhật status dựa trên thời gian hiện tại và điều kiện của bạn
        $workingTimes = WorkingTime::where('departure_time', '>', $currentTime)
            ->where('arrival_time', '>', $currentTime)
            ->get();

        foreach ($workingTimes as $workingTime) {
            // Lấy danh sách xe (passenger cars) dựa trên thời gian khởi hành (departure_time) và thời gian đến (arrival_time)
            $passengerCars = $workingTime->passengerCars;

            foreach ($passengerCars as $passengerCar) {
                // Cập nhật trạng thái của từng xe theo logic của bạn
                if ($workingTime->departure_time->gt($currentTime)) {
                    $passengerCar->pivot->status = 0;
                } elseif ($workingTime->arrival_time->gt($currentTime)) {
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
