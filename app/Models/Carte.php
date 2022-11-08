<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Carte extends Model
{
    protected $fillable = [
        'commune_id',
        'type_demande',
        'priorite',
        'date_paiement',
        'prenom',
        'nom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'nationalite_origine',
        'statut_nationalite',
        'profession',
        'domicile',
        'situation_matrimoniale',
        'taille',
        'teint',
        'signe_particuliere',
        'couleur_cheveux',
        'prenom_pere',
        'nom_pere',
        'prenom_mere',
        'nom_mere'
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
