<?php

namespace App\Domain\Sensor\Actions;

use App\Domain\Sensor\Enum\SensorCommunicationType;
use App\Domain\Sensor\Jobs\RequestExternalSensorReadingJob;
use App\Domain\Sensor\Models\Sensor;

class ScheduleExternalSensorReadings
{
    public function handle(): void
    {
        Sensor::query()
            ->where('communication_type', SensorCommunicationType::PROVIDER)
            ->cursor()
            ->each(function (Sensor $sensor) {
                RequestExternalSensorReadingJob::dispatch($sensor);
            });
    }
}
