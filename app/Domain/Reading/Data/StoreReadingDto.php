<?php

namespace App\Domain\Reading\Data;

class StoreReadingDto {
    public function __construct(
        public string $sensorId,
        public float $temperature,
        public ?string $readingId = null,
    ){
    }
}
