<?php

namespace App\Domain\Reading\Data;

use Carbon\Carbon;

class ReadingFilterDto {
    public function __construct(
        public ?Carbon $from = null,
        public ?Carbon $to = null,
        public ?string $sensorId = null,
    ){
    }
}
