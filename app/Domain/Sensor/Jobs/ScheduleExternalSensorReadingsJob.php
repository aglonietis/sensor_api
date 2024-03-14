<?php

namespace App\Domain\Sensor\Jobs;

use App\Domain\Sensor\Actions\ScheduleExternalSensorReadings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ScheduleExternalSensorReadingsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(ScheduleExternalSensorReadings $scheduleExternalSensorReadings): void
    {
        $scheduleExternalSensorReadings->handle();
    }
}
