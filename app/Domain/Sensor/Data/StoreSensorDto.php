<?php

namespace App\Domain\Sensor\Data;

class StoreSensorDto {
    public function __construct(public string $ip)
    {
    }
}
