<?php

namespace App\Domain\Sensor\Data;

use App\Domain\Sensor\Enum\SensorCommunicationType;

class StoreSensorDto {
    public function __construct(
        public string $ip,
        public SensorCommunicationType $communicationType,
    ){}
}
