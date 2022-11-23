<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'name',
        'description',
        'due_date',
        'is_completed',

    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
