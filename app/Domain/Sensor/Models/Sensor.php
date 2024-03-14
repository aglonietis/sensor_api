<?php

namespace App\Domain\Sensor\Models;

use App\Domain\Sensor\Enum\SensorCommunicationType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $ip
 * @property SensorCommunicationType $communication_type
 */
class Sensor extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'ip',
        'communication_type',
    ];

    protected $casts = [
        'communication_type' => SensorCommunicationType::class,
    ];
}
