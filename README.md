# Sensor API Demo project

Simple Demo project. Just skeleton.

## UI functionality
1. UI at http://localhost:9050
2. Create Sensor at http://localhost:9050/sensors/create

## API functionality
1. Create a reading at http://localhost:9050/api/readings
2. Get Average temperature data at http://localhost:9050/api/readings/data

## Background functionality

1. Request Data from External CSV sensors . Implemented with App\Domain\Sensor\Jobs\ScheduleExtenralSensorReadingsJob. Cron not active.
