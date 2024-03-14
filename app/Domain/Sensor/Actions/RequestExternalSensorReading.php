<?php

namespace App\Domain\Sensor\Actions;

use App\Domain\Reading\Actions\StoreReading;
use App\Domain\Reading\Data\StoreReadingDto;
use App\Domain\Sensor\Models\Sensor;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\HttpFoundation\Request as RequestAlias;

// There are no tests if this works
class RequestExternalSensorReading
{
    /**
     * @throws GuzzleException
     */
    public function handle(Sensor $sensor): void
    {
        $client = new Client();

        $url = "https://$sensor->ip/data";
        $response = $client->request(RequestAlias::METHOD_GET, $url);
        $body = $response->getBody()->getContents();

        $parsedData = str_getcsv($body, ","); // Split the CSV string into lines

        $readingId = $parsedData[0];
        $temperature = $parsedData[1];

        (new StoreReading())->handle(new StoreReadingDto(
            sensorId: $sensor->id,
            temperature: $temperature,
            readingId: $readingId,
        ));
    }
}
