<?php

namespace App\Domain\Sensor\Jobs;

use App\Domain\Sensor\Actions\RequestExternalSensorReading;
use App\Domain\Sensor\Models\Sensor;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RequestExternalSensorReadingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected Sensor $sensor)
    {
        //
    }

    /**
     * Execute the job.
     * @throws GuzzleException
     */
    public function handle(RequestExternalSensorReading $requestExternalSensorReading): void
    {
        $requestExternalSensorReading->handle($this->sensor);
    }
}
