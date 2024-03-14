<?php

namespace App\Domain\Sensor\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'ip'
    ];
}
