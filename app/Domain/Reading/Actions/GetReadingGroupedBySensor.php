<?php

namespace App\Domain\Reading\Actions;

use App\Domain\Reading\Data\ReadingFilterDto;
use App\Domain\Reading\Models\Reading;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class GetReadingGroupedBySensor
{
    public function handle(ReadingFilterDto $readingFilterDto): Collection
    {
        return Reading::query()
            ->when($readingFilterDto->sensorId, function (Builder $builder, string $sensorId) {
                $builder->where('sensor_id', $sensorId);
            })
            ->when($readingFilterDto->from, function (Builder $builder, Carbon $from) {
                $builder->where('created_at', '>=', $from);
            })
            ->when($readingFilterDto->to, function (Builder $builder, Carbon $to) {
                $builder->where('created_at', '<=', $to);
            })
            ->selectRaw('sensor_id, AVG(temperature) as temperature ')
            ->groupBy('sensor_id')
            ->get();
    }
}
