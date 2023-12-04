<?php

namespace App\Console\Commands;

use App\Models\SeatStatus;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClearExpiredBookings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bookings:clear';
    protected $description = 'Clear expired bookings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $endTime = Carbon::now()->subMinutes(env('PAYMENT_TIME',3));

        $expiredBookings = SeatStatus::where('created_at', '<', $endTime)
            ->where('seat_status','0')
            ->get();

        foreach ($expiredBookings as $booking) {
            $booking->delete();
        }

        $this->info('Expired bookings have been cleared.');
    }
}
