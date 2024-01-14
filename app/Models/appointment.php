<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class appointment extends Model
{
    use HasFactory;
    public function barber(): BelongsTo
    {
        return $this->belongsTo(barber::class);
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(service::class);
    }
}
