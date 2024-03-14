<?php

namespace App\Domain\Reading\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sensor_id
 * @property float $temperature
 */
class Reading extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'sensor_id',
        'temperature',
        'reading_id',
    ];
}
