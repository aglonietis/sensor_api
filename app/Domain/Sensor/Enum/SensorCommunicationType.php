<?php

namespace App\Domain\Sensor\Enum;

enum SensorCommunicationType: string
{
    case TRANSMITTER = 'transmitter';
    case PROVIDER = 'provider';
}
