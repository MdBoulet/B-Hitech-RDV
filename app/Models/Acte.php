<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Acte extends Model
{
    protected $fillable = [
        'commune_id',
        'annee',
        'jugement',
        'num_acte',
        'feuillet',
        'prenom',
        'nom',
        'date_naissance',
        'heure_naissance',
        'lieu_naissance',
        'quartier',
        'secteur',
        'sexe',
        'rang_naissance',
        'prenom_pere',
        'nom_pere',
        'date_naissance_pere',
        'lieu_naissance_pere',
        'profession_pere',
        'contact_pere',
        'domicile_pere',
        'prenom_mere',
        'nom_mere',
        'date_naissance_mere',
        'lieu_naissance_mere',
        'profession_mere',
        'contact_mere',
        'domicile_mere',
        'prenom_declarant',
        'nom_declarant',
        'date_naissance_declarant',
        'lieu_naissance_declarant',
        'lien_parente',
        'contact_declarant',
        'domicile_declarant'
    ];

    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function appointment(): MorphOne
    {
        return $this->morphOne(Appointment::class, 'owner' );
    }
}
