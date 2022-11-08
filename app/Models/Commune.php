<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    protected $fillable = ['name'];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
