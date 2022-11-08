<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Appointment extends Model
{

    protected $fillable = ['title', 'date', 'commune_id', 'owner_id', 'owner_type'];

    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function owner(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'owner_type', 'owner_id');
    }
}
