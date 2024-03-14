<?php

namespace App\Domain\Sensor\Actions;

use App\Domain\Sensor\Data\StoreSensorDto;
use App\Domain\Sensor\Models\Sensor;

class StoreSensor
{
    public function handle(StoreSensorDto $storeSensorDto): Sensor
    {
        /** @var Sensor $sensor */
        $sensor = Sensor::query()->create([
           'ip' => $storeSensorDto->ip,
        ]);

        return $sensor;
    }
}
