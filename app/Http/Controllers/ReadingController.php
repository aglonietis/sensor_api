<?php

namespace App\Http\Controllers;

use App\Domain\Reading\Actions\GetReadingGroupedBySensor;
use App\Domain\Reading\Actions\StoreReading;
use App\Domain\Reading\Data\ReadingFilterDto;
use App\Domain\Reading\Data\StoreReadingDto;
use App\Http\Requests\ReadingFilterRequest;
use App\Http\Requests\StoreReadingRequest;
use App\Http\Resources\ReadingResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class ReadingController extends Controller
{
    public function store(StoreReadingRequest $request, StoreReading $storeReading): Response
    {
        $storeReading->handle(new StoreReadingDto(
            sensorId: $request->input('reading.sensor_uuid'),
            temperature: floatval($request->input('reading.temperature')),
        ));

        return response()->noContent();
    }

    public function data(ReadingFilterRequest $request, GetReadingGroupedBySensor $getReadingGroupedBySensor): AnonymousResourceCollection
    {
        return ReadingResource::collection(
            $getReadingGroupedBySensor->handle(new ReadingFilterDto(
                from: $request->input('from') ? Carbon::createFromFormat( 'Y-m-d H:i:s.u', $request->input('from')) : null,
                to: $request->input('to') ? Carbon::createFromFormat( 'Y-m-d H:i:s.u', $request->input('to')) : null,
                sensorId: $request->input('sensor_id'),
            ))
        );
    }
}
