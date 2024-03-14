<?php

namespace App\Http\Resources;

use App\Domain\Reading\Models\Reading;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Reading
 */
class ReadingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'sensor_id' => $this->sensor_id,
            'temperature' => $this->temperature,
        ];
    }
}
