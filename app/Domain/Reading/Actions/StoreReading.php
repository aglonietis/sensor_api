<?php

namespace App\Domain\Reading\Actions;

use App\Domain\Reading\Data\StoreReadingDto;
use App\Domain\Reading\Models\Reading;

class StoreReading
{
    public function handle(StoreReadingDto $storeReadingDto): Reading
    {
        /** @var Reading $reading */
        $reading = Reading::query()->create([
            'sensor_id' => $storeReadingDto->sensorId,
            'temperature' => $storeReadingDto->temperature,
            'reading_id' => $storeReadingDto->readingId,
        ]);

        return $reading;
    }
}
