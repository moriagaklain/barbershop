<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class service extends Model
{
    use HasFactory;
    public function Appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
